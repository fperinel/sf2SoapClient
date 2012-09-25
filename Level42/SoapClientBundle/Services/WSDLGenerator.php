<?php
namespace Level42\SoapClientBundle\Services;

use Level42\SoapClientBundle\Utils\Utils;

use Level42\SoapClientBundle\Entities\MethodWSDL;

use \DOMDocument;
use \DOMXPath;
use \XSLTProcessor;

use Symfony\Component\DependencyInjection\Container;

use Level42\SoapClientBundle\Exceptions\WSDLInterpreterException;
use Level42\SoapClientBundle\Entities\ClassWSDL;
use Level42\SoapClientBundle\Entities\AttributeWSDL;

/**
 * Main class to generate PHP class from WSDL file
 *
 * Original class : WSDLInterpreter
 * The WSDLInterpreter is utilized for the parsing of a WSDL document for rapid
 * and flexible use within the context of PHP 5 scripts.
 */
class WSDLGenerator
{

  const ENTITIES_NS = '\Entities';

  const SERVICES_NS = '\Services';

  const SERVICE_EXTENDS = '\SoapClient';

  /**
   * The WSDL document's URI
   * @var string
   * @access private
   */
  private $wsdl = null;

  /**
   * Namespace
   * @var string
   * @access private
   */
  private $namespace = null;

  /**
   * TargetNamespace
   * @var string
   * @access private
   */
  private $targetNamespace = null;

  /**
   * DOM document representation of the wsdl and its translation
   * @var DOMDocument
   * @access private
   */
  private $dom = null;

  /**
   * XSLT file
   * @var string
   * @access private
   */
  private $xslFile = '';

  /**
   * Extended class for entities
   *
   * @var string
   */
  private $entitiesExtendClass = '';

  /**
   * Entities classes
   *
   * @var ClassWSDL[]
   */
  private $entitiesClass = '';

  /**
   * Services classes
   *
   * @var ClassWSDL[]
   */
  private $servicesClass  = '';

  /**
   * Parses the target wsdl and loads the interpretation into object members
   *
   * @param String $wsdl      WSDL uri to use for generate classes
   * @param String $namespace Namespace to use for classes
   *
   * @throws WSDLInterpreterException Container for all WSDL interpretation problems
   */
  public function __construct($wsdl, $namespace)
  {
    $this->wsdl = $wsdl;
    $this->namespace = $namespace;
    $this->xslFile = dirname(__FILE__).DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."Resources".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."wsdl2php.xsl";

    $this->loadWSDL();

    $this->generateEntities();

    $this->generateServices();
  }

  /**
   * Load WSDL file in dom object
   */
  protected function loadWSDL()
  {
    try {
      $this->dom = new DOMDocument();
      $this->dom->load($this->wsdl, LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);

      $xpath = new DOMXPath($this->dom);
      $results = $xpath->query("//@targetNamespace");
      $this->targetNamespace = $results->item(0)->value;

      /**
       * wsdl:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://schemas.xmlsoap.org/wsdl/']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry) {
        $parent = $entry->parentNode;
        $wsdl = new DOMDocument();
        $wsdl->load($entry->getAttribute("location"), LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        foreach ($wsdl->documentElement->childNodes as $node) {
          $newNode = $this->dom->importNode($node, true);
          $parent->insertBefore($newNode, $entry);
        }
        $parent->removeChild($entry);
      }

      /**
       * xsd:import
       */
      $query = "//*[local-name()='import' and namespace-uri()='http://www.w3.org/2001/XMLSchema']";
      $entries = $xpath->query($query);
      foreach ($entries as $entry) {
        $parent = $entry->parentNode;
        $xsd = new DOMDocument();
        $result = @$xsd->load(dirname($this->wsdl) . DIRECTORY_SEPARATOR . $entry->getAttribute("schemaLocation"),
            LIBXML_DTDLOAD|LIBXML_DTDATTR|LIBXML_NOENT|LIBXML_XINCLUDE);
        if ($result) {
          foreach ($xsd->documentElement->childNodes as $node) {
            $newNode = $this->dom->importNode($node, true);
            $parent->insertBefore($newNode, $entry);
          }
          $parent->removeChild($entry);
        }
      }

      $this->dom->formatOutput = true;
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error loading WSDL document (".$e->getMessage().")");
    }

    try {
      $xsl = new XSLTProcessor();
      $xslDom = new DOMDocument();
      $xslDom->load($this->xslFile);
      $xsl->registerPHPFunctions();
      $xsl->importStyleSheet($xslDom);
      $this->dom = $xsl->transformToDoc($this->dom);
      $this->dom->formatOutput = true;
    } catch (Exception $e) {
      throw new WSDLInterpreterException("Error interpreting WSDL document (".$e->getMessage().")");
    }
  }

  /**
   * Retrieve the targetnamespace of WSDL file
   *
   * @return string
   */
  protected function getTargetNamespace()
  {
    if ($this->targetNamespace == null) {
      $xpath = new DOMXPath($this->dom);
      $results = $xpath->query("//@targetNamespace");
      $this->targetNamespace = $results->item(0)->value;
    }

    return $this->targetNamespace;
  }

  /**
   * Generate entities classes
   *
   * @throws WSDLInterpreterException
   */
  protected function generateEntities()
  {
    $classes = $this->dom->getElementsByTagName("class");
    $this->entitiesClass = array();

    foreach ($classes as $class) {
      $name = Utils::getValidName($class->getAttribute("name"));
      $extends = $class->getElementsByTagName("extends");

      $entityClass = new ClassWSDL();
      $entityClass->setName($name);

      if ($extends->length > 0) {
        $classExtension = Utils::getValidName($extends->item(0)->nodeValue);
        $entityClass->setExtends($this->namespace.self::ENTITIES_NS.'\\'.$classExtension);
      }/* else {
      $classExtension = $this->entitiesExtendClass;
      }*/

      $entityClass->setNamespace($this->namespace.'\Entities');

      $properties = $class->getElementsByTagName("entry");
      foreach ($properties as $property) {
        $attributeName = $property->getAttribute("name");
        $attributeType = Utils::getValidType($property->getAttribute("type"));
        if(!Utils::isPrimitive($attributeType)) {
          $attributeType = $this->namespace.self::ENTITIES_NS.'\\'.$attributeType;
        }
        $entityClass->addAttribute($attributeName, $attributeType);
      }

      $this->entitiesClass[$name] = $entityClass;
    }
  }

  /**
   * Generate entities classes
   *
   * @throws WSDLInterpreterException
   */
  protected function generateServices()
  {
    $this->servicesClass = array();

    $services = $this->dom->getElementsByTagName("service");
    foreach ($services as $service) {
      $name = Utils::getValidName($service->getAttribute("name"));

      $serviceClass = new ClassWSDL(ClassWSDL::TYPESERVICE, $this->wsdl, $this->targetNamespace);
      $serviceClass->setName($name);
      $serviceClass->setExtends(self::SERVICE_EXTENDS);
      $serviceClass->setNamespace($this->namespace.self::SERVICES_NS);

      $functions = $service->getElementsByTagName("function");
      foreach ($functions as $function) {
        $fctName = $function->getAttribute("name");
        $parameters = $function->getElementsByTagName("parameters");

        $parameterList = null;
        $returnType = null;
        $fctExceptions = null;
        $fctParameters = null;

        if ($parameters->length > 0) {
          $fctParameters = array();
          $parameterList = $parameters->item(0)->getElementsByTagName("entry");
          foreach ($parameterList as $parameter) {
            $parName = $parameter->getAttribute("name");
            $type = $parameter->getAttribute("type");
            $parType = Utils::getValidType($type);
            if(!Utils::isPrimitive($parType)) {
              $serviceClass->addToClassmap($type, $parType);
              $parType = $this->namespace.self::ENTITIES_NS.'\\'.$parType;
            }
            $fctParameters[$parType] = $parName;
          }
        }

        $returns = $function->getElementsByTagName("returns");
        if ($returns->length > 0) {
          $returns = $returns->item(0)->getElementsByTagName("entry");
          if ($returns->length > 0) {
            $type = $returns->item(0)->getAttribute("type");
            $returnType = Utils::getValidType($type);
            if(!Utils::isPrimitive($returnType)) {
              $serviceClass->addToClassmap($type, $returnType);
              $returnType = $this->namespace.self::ENTITIES_NS.'\\'.$returnType;
            }
          }
        }

        $exceptions = $function->getElementsByTagName("exceptions");
        if ($exceptions->length > 0) {
          $exceptions = $exceptions->item(0)->getElementsByTagName("entry");
          if ($exceptions->length > 0) {
            $fctExceptions = array();
            foreach($exceptions as $exception) {
              $type = Utils::getValidType($exception->getAttribute("type"));
              if(!Utils::isPrimitive($type)) {
                $fctExceptions[] = $this->namespace.self::ENTITIES_NS.'\\'.$type;
              }
            }
          }
        }

        $method = new MethodWSDL($fctName, $returnType, $fctParameters, $fctExceptions);
        $serviceClass->addMethod($method);
      }

      $this->servicesClass[$name] = $serviceClass;
    }
  }

  /**
   * Return list of entities classes
   *
   * @return ClassWSDL[]
   */
  public function getEntitiesClasses()
  {
    return $this->entitiesClass;
  }

  /**
   * Return list of services classes
   *
   * @return ClassWSDL[]
   */
  public function getServicesClasses()
  {
    return $this->servicesClass;
  }
}