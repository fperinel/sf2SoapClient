<?php

namespace Level42\SoapClientBundle\Entities;

use Level42\SoapClientBundle\Utils\Utils;

use Level42\SoapClientBundle\Entities\AttributeWSDL;
use Symfony\Component\DependencyInjection\Container;

/**
 * This class represent a generated class from a wsdl file
 */
class ClassWSDL
{

  /**
   * Is a service class
   */
  const TYPESERVICE = 'Service';

  /**
   * Is an entity class
   */
  const TYPEENTITY = 'Entity';

  /**
   * Type of the class
   * @var string
   */
  private $type;

  /**
   * Name of the class
   * @var string
   */
  private $name;

  /**
   * Name of extended class
   * @var string
   */
  private $extends;

  /**
   * List of class attributes
   * @var AttributeWSDL[]
   */
  private $attributes = array();

  /**
   * List of class methods
   * @var MethodWSDL[]
   */
  private $methods = array();

  /**
   * Namespace of the class
   * @var string
   */
  private $namespace;

  /**
   * TargetNamespace of the class
   * @var string
   */
  private $targetNamespace;

  /**
   * WSDL use to generate the class
   * @var string
   */
  private $wsdl;

  /**
   * List of used class
   * @var array[]
   */
  private $usedClasses = array();

  /**
   * List of classmap
   * @var string[]
   */
  private $classmap = array();

  /**
   * Class constructor
   *
   * @param string $type            Type
   * @param string $wsdl            URI of wsdl
   * @param string $targetNamespace Target namespace from WSDL
   *
   * @return ClassWSDL
   */
  public function __construct($type = self::TYPEENTITY, $wsdl = null, $targetNamespace = null)
  {
    $this->type = $type;
    $this->wsdl = $wsdl;
    $this->targetNamespace = $targetNamespace;
  }

  /**
   * Return the generated class name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set generated class name
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Return the extends class
   *
   * @return string
   */
  public function getExtends()
  {
    return $this->extends;
  }

  /**
   * Set extends class name
   * @param string $extends
   */
  public function setExtends($extends)
  {
    if ($extends !== null) {
      $result = Utils::getNamespace($extends);
      $this->extends = $result['classname'];
      if ($result['namespace'] !== null) {
        $this->usedClasses[$result['namespace'].'\\'.$result['classname']] = $result['namespace'].'\\'.$result['classname'];
      }
    }
  }

  /**
   * Return the attributes list of generated class
   *
   * @return array[AttributeWSDL]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }

  /**
   * Set the attributes list of generated class
   *
   * @param AttributeWSDL[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }

  /**
   * Return the generated class namespace
   *
   * @return string
   */
  public function getNamespace()
  {
    return $this->namespace;
  }

  /**
   * Set the generated class namespace
   *
   * @param string $namespace
   */
  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }

  /**
   * Return the attributes list of generated class
   *
   * @return MethodWSDL[]
   **/
  public function getMethods()
  {
    return $this->methods;
  }

  /**
   * Set the methods list of generated class
   *
   * @param MethodWSDL[] $methods
   */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }

  /**
   * Add an attribute to the generated class
   *
   * @param string $name Attribute name
   * @param string $type Attribute type name (full classpath : Namespace\Class
   */
  public function addAttribute($name, $type)
  {
    $this->attributes[] = new AttributeWSDL($name, $type);
  }

  /**
   * Add a method to the generated class
   *
   * @param MethodWSDL $method Method to add
   */
  public function addMethod($method)
  {
    $this->methods[] = $method;
  }

  /**
   * Add a objet to service classmap
   *
   * @param string $wsdlObj wsdl class
   * @param string $phpObj  php class
   */
  public function addToClassmap($wsdlObj, $phpObj)
  {
    $this->classmap[$wsdlObj] = $phpObj;
  }

  /**
   * Return generated source code of the class
   *
   * @return string
   */
  public function renderClassCode()
  {
    $return = "<?php\n";
    $return .= 'namespace '.$this->getNamespace().";\n\n";

    $return .= $this->generateUsesDirectives();

    $return .= "\n\n/**\n";
    $return .= ' * '.$this->getName()." class\n";
    $return .= ' */'."\n";
    $return .= "class ".$this->getName();

    if ($this->getExtends() != null) {
      $return .= " extends ".$this->getExtends();
    }

    $return .= "\n{\n\n";

    foreach ($this->getAttributes() as $attribute) {
      /** $attribute AttributeWSDL */
      $return .= $attribute->renderAttribute();
    }

    if ($this->type == self::TYPESERVICE) {
      $return .= $this->getClassmap();
      $return .= $this->getContructor();
      $return .= $this->getTargetNamespaceMethod();
      $return .= $this->getSoapHeaderMethods();
    }

    foreach ($this->getAttributes() as $attribute) {
      /** $attribute AttributeWSDL */
      $return .= $attribute->renderGetter();
      $return .= $attribute->renderSetter();
    }

    foreach ($this->getMethods() as $method) {
      /** $method MethodWSDL */
      $return .= $method->renderMethod("return parent::__soapCall('".$method->getName()."', func_get_args());");
    }

    $return .= "}\n";

    return $return;
  }

  /**
   * Retrun a constructor method source code for a soap service class
   *
   * @return string
   */
  public function getContructor()
  {

    $return = ""
    . "  /**\n"
    . "   * ClassService constructor\n"
    . "   *\n"
    . "   * @param string \$wsdl WSDL location for this service\n"
    . "   * @param array \$options Options for the SoapClient\n"
    . "   *\n"
    . "   * @return ClassService\n"
    . "   */\n"
    . "  public function __construct(\$wsdl = '".$this->wsdl."', \$options = array()) {\n"
    . "    foreach (self::\$classmap as \$wsdlClassName => \$phpClassName) {\n"
    . "      if (!isset(\$options['classmap'][\$wsdlClassName])) {\n"
    . "        \$options['classmap'][\$wsdlClassName] = \$phpClassName;\n"
    . "      }\n"
    . "    }\n"
    . "    parent::__construct(\$wsdl, \$options);\n"
    . "  }\n\n";

    return $return;
  }

  /**
   * Retrun a classmap static attribute source code for a soap service class
   *
   * @return string
   */
  public function getClassmap()
  {
    $return = ""
    . "  /**\n"
    . "   * Default class map\n"
    . "   * @access private\n"
    . "   * @var array\n"
    . "   */\n"
    . "  private static \$classmap = array(\n";

    foreach ($this->classmap as $wsdlObj => $phpObj) {
      $return .= "    \"".$wsdlObj."\" => \"".$phpObj."\",\n";
    }

    $return.= "  );\n\n";

    return $return;
  }

  /**
   * Return method source code to set SoapHeader on the soap service class
   *
   * @return string
   */
  public function getSoapHeaderMethods()
  {
    $return = ""
    . "  /**\n"
    . "   * Set a SOAP header\n"
    . "   *\n"
    . "   * @param string \$key Key of header value\n"
    . "   * @param mixed \$value Value of header\n"
    . "   */\n"
    . "  public function setSoapHeader(\$key, \$value = null) {\n"
    . "    \$soapHeader = new SoapHeader(\$this->getTargetNamespace(), \$key, \$value);\n"
    . "    \$this->__setSoapHeaders(\$soapHeader);\n"
    . "  }\n"
    . "\n"
    . "  /**\n"
    . "   * Set multiple SOAP headers\n"
    . "   *\n"
    . "   * @param array \$header  Associative array with key/value\n"
    . "   */\n"
    . "  public function setSoapHeaders(\$headers = array()) {\n"
    . "    \$headers = array();\n"
    . "    foreach (\$headers as \$key => \$value) {\n"
    . "      \$headers[] = new SoapHeader(\$this->getTargetNamespace(), \$key, \$value);\n"
    . "    }\n"
    . "    \$this->__setSoapHeaders(\$headers);\n"
    . "  }\n\n";

    return $return;
  }

  /**
   * Return a targetNamespace method for service class
   *
   * @return string
   */
  public function getTargetNamespaceMethod()
  {
    $return = ""
    . "  /**\n"
    . "   * Return WSDL targetNamespace\n"
    . "   *\n"
    . "   * @return string\n"
    . "   */\n"
    . "  public function getTargetNamespace() {\n"
    . "    return \"".$this->targetNamespace."\";\n"
    . "  }\n"
    . "\n";

    return $return;
  }

  /**
   * Generate "use" directive for generated class
   *
   * @return string
   */
  public function generateUsesDirectives()
  {
    $return = null;

    $useDirectives = array();
    foreach ($this->getAttributes() as $attribute) {
      /** $attribute AttributeWSDL */
      $useDirectives = array_merge($useDirectives, $attribute->getUsedClasses());
    }

    foreach ($this->getMethods() as $method) {
      /** $method MethodWSDL */
      $useDirectives = array_merge($useDirectives, $method->getUsedClasses());
    }

    foreach ($this->usedClasses as $use) {
      /** $method MethodWSDL */
      $useDirectives = array_merge($useDirectives, array($use => $use));
    }
        
    // Render use list
    foreach ($useDirectives as $use) {
      $return .= "use $use;\n";
    }
    
    return $return;
  }

}