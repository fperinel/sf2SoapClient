<?php

namespace Level42\SoapClientBundle\Services;

use \DOMDocument;
use \DOMXPath;
use \XSLTProcessor;
use Symfony\Component\DependencyInjection\Container;

/**
 * The main class for handling WSDL interpretation
 *
 * The WSDLInterpreter is utilized for the parsing of a WSDL document for rapid
 * and flexible use within the context of PHP 5 scripts.
 */
class WSDLInterpreter
{

  /**
   * Classname of Soap Client
   *
   * @var string
   * @access private
   */
  private $_parentSoapClient = 'SoapClient';

  /**
   * Namespace
   * @var string
   * @access private
   */
  private $_namespace = null;

  /**
   * TargetNamespace
   * @var string
   * @access private
   */
  private $_targetNamespace = null;

  /**
   * The WSDL document's URI
   * @var string
   * @access private
   */
  private $_wsdl = null;

  /**
   * The service URI
   * @var string
   * @access private
   */
  private $_service = null;

  /**
   * A SoapClient for loading the WSDL
   * @var SoapClient
   * @access private
   */
  private $_client = null;

  /**
   * DOM document representation of the wsdl and its translation
   * @var DOMDocument
   * @access private
   */
  private $_dom = null;

  /**
   * Array of classes and members representing the WSDL message types
   * @var array
   * @access private
   */
  private $_classmap = array();

  /**
   * Array of sources for WSDL message classes
   * @var array
   * @access private
   */
  private $_classPHPSources = array();

  /**
   * Array of sources for WSDL services
   * @var array
   * @access private
   */
  private $_servicePHPSources = array();

  /**
   * Parses the target wsdl and loads the interpretation into object members
   *
   * @param String $wsdl
   *     WSDL uri to use for generate classes
   * @param String $namespace
   *     Namespace to use for classes
   *
   * @throws WSDLInterpreterException Container for all WSDL interpretation problems
   */
  public function __construct($wsdl, $namespace)
  {
    try {
      $this->_wsdl = $wsdl;
      $this->_namespace = $namespace;

      $this->_dom = new DOMDocument();
      $this->_dom->load($wsdl, LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);

      $xpath = new DOMXPath($this->_dom);
      $results = $xpath->query("//@targetNamespace");
      $this->_targetNamespace = $results->item(0)->value;

      /**
       * wsdl:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry)
      {
        $parent = $entry->parentNode;
        $wsdl = new DOMDocument();
        $wsdl->load($entry->getAttribute("location"), LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        foreach ($wsdl->documentElement->childNodes as $node)
        {
          $newNode = $this->_dom->importNode($node, true);
          $parent->insertBefore($newNode, $entry);
        }
        $parent->removeChild($entry);
      }

      /**
       * xsd:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://www.w3.org/2001/XMLSchema']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry)
      {
        $parent = $entry->parentNode;
        $xsd = new DOMDocument();
        $result = @$xsd->load(dirname($this->_wsdl) . DIRECTORY_SEPARATOR . $entry->getAttribute("schemaLocation"),
            LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        if ($result)
        {
          foreach ($xsd->documentElement->childNodes as $node)
          {
            $newNode = $this->_dom->importNode($node, true);
            $parent->insertBefore($newNode, $entry);
          }
          $parent->removeChild($entry);
        }
      }

      $this->_dom->formatOutput = true;
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error loading WSDL document (".$e->getMessage().")");
    }

    try
    {
      $xsl = new XSLTProcessor();
      $xslDom = new DOMDocument();
      $xslDom->load(dirname(__FILE__).DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."Resources".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."wsdl2php.xsl");
      $xsl->registerPHPFunctions();
      $xsl->importStyleSheet($xslDom);
      $this->_dom = $xsl->transformToDoc($this->_dom);
      $this->_dom->formatOutput = true;
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error interpreting WSDL document (".$e->getMessage().")");
    }

    $this->_loadClasses();
    $this->_loadServices();
  }

  /**
   * Validates a name against standard PHP naming conventions
   *
   * @param string $name the name to validate
   *
   * @return string the validated version of the submitted name
   *
   * @access private
   */
  private function _validateNamingConvention($name)
  {
    return preg_replace('#[^a-zA-Z0-9_\x7f-\xff]*#', '',
        preg_replace('#^[^a-zA-Z_\x7f-\xff]*#', '', $name));
  }

  /**
   * Validates a class name against PHP naming conventions and already defined
   * classes, and optionally stores the class as a member of the interpreted classmap.
   *
   * @param string $className Nom de la classe
   *
   * @return string the validated version of the submitted class name
   *
   * @access private
   */
  private function _validateClassName($className)
  {
    $validClassName = $this->_validateNamingConvention($className);
    $validClassName = Container::camelize($validClassName);

    // Ajout dans le classeMap
    $this->_classmap[$className] = $validClassName;

    return $validClassName;
  }


  /**
   * Validates a wsdl type against known PHP primitive types, or otherwise
   * validates the namespace of the type to PHP naming conventions
   *
   * @param string $type the type to test
   *
   * @return string the validated version of the submitted type
   *
   * @access private
   * @todo Extend type handling to gracefully manage extendability of wsdl definitions, add reserved keyword checking
   */
  private function _validateType($type)
  {
    $array = false;
    if (substr($type, -2) == "[]")
    {
      $array = true;
      $type = substr($type, 0, -2);
    }
    if (substr($type, 0, 7) == "ArrayOf")
    {
      $array = true;
      $type = substr($type, 8);
    }
    switch (strtolower($type))
    {
      case "int": case "integer": case "long": case "byte": case "short":
      case "negativeInteger": case "nonNegativeInteger":
      case "nonPositiveInteger": case "positiveInteger":
      case "unsignedByte": case "unsignedInt": case "unsignedLong": case "unsignedShort":
        $validType = "integer";
        break;

      case "float": case "long": case "double": case "decimal":
        $validType = "double";
        break;

      case "string": case "token": case "normalizedString": case "hexBinary":
        $validType = "string";
        break;

      default:
        $validType = $this->_validateNamingConvention($type);
        $validType = Container::camelize($validType);
        break;
    }
    if ($array)
    {
      $validType .= "[]";
    }
    return $validType;
  }

  /**
   * Loads classes from the translated wsdl document's message types
   *
   * @access private
   */
  private function _loadClasses()
  {
    $classes = $this->_dom->getElementsByTagName("class");
    $sources = array();

    foreach ($classes as $class)
    {
      // Nom de la classe
      $class->setAttribute("validatedName",
          $this->_validateClassName($class->getAttribute("name")));

      $extends = $class->getElementsByTagName("extends");
      $classExtension = null;
      if ($extends->length > 0)
      {
        $extends->item(0)->nodeValue = $this->_validateClassName($extends->item(0)->nodeValue, true);
        $classExtension = $extends->item(0)->nodeValue;
      } else {
        $classExtension = $this->_parentSoapClient;
      }

      // propriété de la classe
      $properties = $class->getElementsByTagName("entry");
      foreach ($properties as $property)
      {
        $property->setAttribute("validatedName",
            $this->_validateNamingConvention($property->getAttribute("name")));
        $property->setAttribute("type",
            $this->_validateType($property->getAttribute("type")));
      }

      $sources[$class->getAttribute("validatedName")] = array(
          "extends" => null,
          "source" => $this->_generateClassPHP($class, $classExtension)
      );
    }

    while (sizeof($sources) > 0)
    {
      $classesLoaded = 0;
      foreach ($sources as $className => $classInfo)
      {
        if (!$classInfo["extends"] || (isset($this->_classPHPSources[$classInfo["extends"]])))
        {
          $this->_classPHPSources[$className] = $classInfo["source"];
          unset($sources[$className]);
          $classesLoaded++;
        }
      }
      if (($classesLoaded == 0) && (sizeof($sources) > 0))
      {
        throw new WSDLInterpreterException("Error loading PHP classes: ".join(", ", array_keys($sources)));
      }
    }
  }


  /**
   * Generates the PHP code for a WSDL message type class representation
   *
   * This gets a little bit fancy as the magic methods __get and __set in
   * the generated classes are used for properties that are not named
   * according to PHP naming conventions (e.g., "MY-VARIABLE").  These
   * variables are set directly by SoapClient within the target class,
   * and could normally be retrieved by $myClass->{"MY-VARIABLE"}.  For
   * convenience, however, this will be available as $myClass->MYVARIABLE.
   *
   * @param DOMElement $class the interpreted WSDL message type node
   * @param stirng $extension Classe mère
   *
   * @return string the php source code for the message type class
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateClassPHP($class, $extension)
  {
    $return = "";
    $return .= 'namespace '.$this->_namespace."\Entities;\n\n\n";
    $return .= '/**'."\n";
    $return .= ' * Webservice object '.$class->getAttribute("validatedName")."\n";
    $return .= ' */'."\n";
    $return .= "class ".$class->getAttribute("validatedName");
    $return .= " extends ".$extension;
    $return .= " {\n\n";

    $properties = $class->getElementsByTagName("entry");
    foreach ($properties as $property)
    {
      $return .= "  /**\n"
      . "   * ".$property->getAttribute("validatedName")." attribute\n"
      . "   * @access public\n"
      . "   * @var ".$property->getAttribute("type")."\n"
      . "   */\n"
      . "  ".'public $'.$property->getAttribute("validatedName").";\n\n";
    }
    foreach ($properties as $property)
    {
      $type = $property->getAttribute("type");

      // GETTER
      $return .= "  /**\n"
      . "   * Getter for ".$property->getAttribute("validatedName")." attribute\n"
      . "   * \n"
      . "   * @return ".$type." : ".$property->getAttribute("validatedName")."\n"
      . "   */\n"
      . "  ".'public function get'.Container::camelize($property->getAttribute("validatedName"))."() {\n"
      . "    return \$this->".$property->getAttribute("validatedName").";\n  }\n\n";
      // SETTER
      $return .= "  /**\n"
      . "   * Setter for ".$property->getAttribute("validatedName")." attribute\n"
      . "   * \n"
      . "   * @param ".$type." $".$property->getAttribute("validatedName")."\n"
      . "   */\n"
      . "  ".'public function set'.Container::camelize($property->getAttribute("validatedName"))."($".$property->getAttribute("validatedName").") {\n"
      . "    \$this->".$property->getAttribute("validatedName")." = $".$property->getAttribute("validatedName").";\n  }\n\n";
    }
    $return .= "}";
    return $return;
  }

  /**
   * Loads services from the translated wsdl document
   *
   * @access private
   */
  private function _loadServices()
  {
    $services = $this->_dom->getElementsByTagName("service");
    foreach ($services as $service)
    {
      $service->setAttribute("validatedName",
          $this->_validateClassName($service->getAttribute("name"), false));

      $functions = $service->getElementsByTagName("function");
      foreach ($functions as $function)
      {
        $function->setAttribute("validatedName",
            $this->_validateNamingConvention($function->getAttribute("name")));
        $parameters = $function->getElementsByTagName("parameters");
        if ($parameters->length > 0)
        {
          $parameterList = $parameters->item(0)->getElementsByTagName("entry");
          foreach ($parameterList as $variable)
          {
            $variable->setAttribute("validatedName",
                $this->_validateNamingConvention($variable->getAttribute("name")));
            $variable->setAttribute("type",
                $this->_validateType($variable->getAttribute("type")));
          }
        }
      }
      $this->_servicePHPSources[$service->getAttribute("validatedName")] =
      $this->_generateServicePHP($service);
    }
  }

  /**
   * Generates the PHP code for a WSDL service class representation
   *
   * This method, in combination with generateServiceFunctionPHP, create a PHP class
   * representation capable of handling overloaded methods with strict parameter
   * type checking.
   *
   * @param DOMElement $service the interpreted WSDL service node
   * @return string the php source code for the service class
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateServicePHP($service)
  {
    $return = "";
    $return .= 'namespace '.$this->_namespace."\Services;\n\n\n";
    foreach($this->_classmap as $className => $validClassName) {
      $return .= 'use '.$this->_namespace."\Entities\\".$validClassName.";\n";
    }
    $return .= "\n\n";
    $return .= '/**'."\n";
    $return .= ' * Service '.$service->getAttribute("validatedName")."\n";
    $return .= ' */'."\n";
    $return .= "class ".$service->getAttribute("validatedName")." {\n";

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Webservice namespace'."\n";
    $return .= "  ".' * @access private'."\n";
    $return .= "  ".' * @var string'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'private $namespace = \''.$this->_targetNamespace.'\';'."\n\n";

    if (sizeof($this->_classmap) > 0)
    {
      $return .= "  ".'/**'."\n";
      $return .= "  ".' * Default class map for wsdl=>php'."\n";
      $return .= "  ".' * @access private'."\n";
      $return .= "  ".' * @var array'."\n";
      $return .= "  ".' */'."\n";
      $return .= "  ".'private static $classmap = array('."\n";
      foreach ($this->_classmap as $className => $validClassName)
      {
        $return .= "    ".'"'.$className.'" => "'.$validClassName.'",'."\n";
      }
      $return .= "  );\n\n";
    }

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Constructor using wsdl location and options array'."\n";
    $return .= "  ".' * @param string $wsdl WSDL location for this service'."\n";
    $return .= "  ".' * @param array $options Options for the SoapClient'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'public function __construct($wsdl="'.str_replace("\\", "\\\\", $this->_wsdl).'", $options=array()) {'."\n";
    $return .= "    ".'foreach (self::$classmap as $wsdlClassName => $phpClassName) {'."\n";
    $return .= "    ".'    if (!isset($options[\'classmap\'][$wsdlClassName])) {'."\n";
    $return .= "    ".'        $options[\'classmap\'][$wsdlClassName] = $phpClassName;'."\n";
    $return .= "    ".'    }'."\n";
    $return .= "    ".'}'."\n";
    if ($this->_service != null)
    {
      $return .= "    ".'if (!isset($options[\'location\'])) {'."\n";
      $return .= "    ".'  $options[\'location\'] = \''.$this->_service.'\'; '."\n";
      $return .= "    ".'}'."\n";
    }
    $return .= "    ".'parent::__construct($wsdl, $options);'."\n";
    $return .= "  }\n\n";

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Set a SOAP header'."\n";
    $return .= "  ".' * '."\n";
    $return .= "  ".' * @param string $key Key of header value'."\n";
    $return .= "  ".' * @param mixed $value Value of header'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'public function setSoapHeader($key, $value = null) {'."\n";
    $return .= "    ".'$soapHeader = new SoapHeader($this->namespace, $key, $value);'."\n";
    $return .= "    ".'$this->__setSoapHeaders($soapHeader);'."\n";
    $return .= "  }\n\n";

    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Set multiple SOAP headers'."\n";
    $return .= "  ".' * '."\n";
    $return .= "  ".' * @param array $header  Associative array with key/value'."\n";
    $return .= "  ".' */'."\n";
    $return .= "  ".'public function setSoapHeaders($headers = array()) {'."\n";
    $return .= "    ".'$headers = array();'."\n";
    $return .= "    ".'foreach ($headers as $key => $value) {'."\n";
    $return .= "      ".'$headers[] = new SoapHeader($this->namespace, $key, $value);'."\n";
    $return .= "    }\n";
    $return .= "    ".'$this->__setSoapHeaders($headers);'."\n";
    $return .= "  }\n\n";

    $functionMap = array();
    $functions = $service->getElementsByTagName("function");
    foreach ($functions as $function)
    {
      if (!isset($functionMap[$function->getAttribute("validatedName")]))
      {
        $functionMap[$function->getAttribute("validatedName")] = array();
      }
      $functionMap[$function->getAttribute("validatedName")][] = $function;
    }
    foreach ($functionMap as $functionName => $functionNodeList)
    {
      $return .= $this->_generateServiceFunctionPHP($functionName, $functionNodeList)."\n\n";
    }

    $return .= "}";
    return $return;
  }

  /**
   * Generates the PHP code for a WSDL service operation function representation
   *
   * The function code that is generated examines the arguments that are passed and
   * performs strict type checking against valid argument combinations for the given
   * function name, to allow for overloading.
   *
   * @param string $functionName the php function name
   * @param array $functionNodeList array of DOMElement interpreted WSDL function nodes
   * @return string the php source code for the function
   *
   * @access private
   * @todo Include any applicable annotation from WSDL
   */
  private function _generateServiceFunctionPHP($functionName, $functionNodeList)
  {
    $return = "";
    $return .= "  ".'/**'."\n";
    $return .= "  ".' * Service Call: '.$functionName."\n";
    $return .= "  ".' *'."\n";
    foreach ($functionNodeList as $functionNode)
    {
      // Construction des paramètres
      $parameters = $functionNode->getElementsByTagName("parameters");
      $arguments = array();
      if ($parameters->length > 0)
      {
        $parameters = $parameters->item(0)->getElementsByTagName("entry");
        foreach ($parameters as $parameter)
        {
          $return .= "  ".' * @param '.$parameter->getAttribute("type").' $'.$parameter->getAttribute("validatedName")."\n";
          if ($this->isPrimitive($parameter->getAttribute("type")))
          {
            $arguments[] = '$'.$parameter->getAttribute("validatedName");
          }
          else
          {
            $arguments[] = $parameter->getAttribute("type").' $'.$parameter->getAttribute("validatedName");
          }
        }
      }
      // Construction des retours
      $returns = $functionNode->getElementsByTagName("returns");
      $returnOptions = array();
      if ($returns->length > 0)
      {
        $returns = $returns->item(0)->getElementsByTagName("entry");
        if ($returns->length > 0)
        {
          $returnOptions[] = $this->_validateType($returns->item(0)->getAttribute("type"));
        }
      }

      // Construction des exceptions
      $exceptions = $functionNode->getElementsByTagName("exceptions");
      $exceptionsOptions = array();
      if ($exceptions->length > 0)
      {
        $exceptions = $exceptions->item(0)->getElementsByTagName("entry");
        if ($exceptions->length > 0)
        {
          $exceptionsOptions[] = $exceptions->item(0)->getAttribute("type");
        }
      }
    }
    $return .= "  ".' *'."\n";
    $return .= "  ".' * @return '.join("|", array_unique($returnOptions))."\n";
    $return .= "  ".' *'."\n";
    $exceptions = array_unique($exceptionsOptions);
    foreach ($exceptions as $exception)
    {
      $return .= "  ".' * @throws '.$exception."\n";
    }
    $return .= "  ".' */'."\n";
    $return .= "  ".'public function '.$functionName.'('.implode(', ', $arguments).') {'."\n";
    $return .= "    ".'$args = func_get_args();'."\n";
    $return .= "    ".'return $this->__soapCall("'.
        $functionNodeList[0]->getAttribute("name").'", $args);'."\n";
    $return .= "  ".'}'."\n";

    return $return;
  }

  /**
   * Retourne vrai si le type passé en paramètre est un primitif PHP
   *
   * @param string $type  Type à analyser
   *
   * @return boolean Vrai si le type est primitif, faux sinon
   */
  private function isPrimitive($type)
  {
    return in_array($type, $this->_primitives);
  }

  /**
   * Saves the PHP source code that has been loaded to a target directory.
   *
   * Services will be saved by their validated name, and classes will be included
   * with each service file so that they can be utilized independently.
   *
   * @param string $outputDirectory the destination directory for the source code
   * @param boolean force overwriting
   * @return array array of source code files that were written out
   * @throws WSDLInterpreterException problem in writing out service sources
   * @access public
   * @todo Add split file options for more efficient output
   */
  public function savePHPObjects($outputDirectory, $overwrite = false)
  {
    if(!is_dir($outputDirectory)) {
      mkdir($outputDirectory, 0777, true);
    }
    foreach ($this->_classPHPSources as $className => $classCode)
    {
      $filename = $outputDirectory.DIRECTORY_SEPARATOR.$className.".php";
      if (!file_exists($filename) || $overwrite)
      {
        file_put_contents($filename, "<?php\n\n".$classCode);
      }
    }
  }

  /**
   * Saves the PHP source code that has been loaded to a target directory.
   *
   * Services will be saved by their validated name, and classes will be included
   * with each service file so that they can be utilized independently.
   *
   * @param string $outputDirectory the destination directory for the source code
   * @param boolean force overwriting
   * @return array array of source code files that were written out
   * @throws WSDLInterpreterException problem in writing out service sources
   * @access public
   * @todo Add split file options for more efficient output
   */
  public function savePHPServices($outputDirectory, $overwrite = false)
  {
    if(!is_dir($outputDirectory)) {
      mkdir($outputDirectory, 0777, true);
    }
    foreach ($this->_servicePHPSources as $className => $classCode)
    {
      $filename = $outputDirectory.DIRECTORY_SEPARATOR.$className.".class.php";
      if (!file_exists($filename) || $overwrite)
      {
        file_put_contents($filename, "<?php\n\n".$classCode);
      }
    }
  }
}

?>
