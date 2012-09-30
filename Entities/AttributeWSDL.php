<?php

namespace Level42\SoapClientBundle\Entities;

use Symfony\Component\DependencyInjection\Container;
use Level42\SoapClientBundle\Entities\MethodWSDL;
use Level42\SoapClientBundle\Utils\Utils;

/**
 * This class represent a generated attribute from a wsdl file
 */
class AttributeWSDL
{

  /**
   * Name of the attribute
   * @var string
   */
  private $name;

  /**
   * Type of the attribute
   * @var string
   */
  private $type;

  /**
   * Comment of the attribute
   * @var string
   */
  private $comment;

  /**
   * Used class
   * @var string
   */
  private $usedClasses;

  /**
   * Constuctor for class
   *
   * @param string $name    Attribute name
   * @param string $type    Attribute type
   * @param string $comment Attribute comment
   *
   * @return AttributeWSDL
   */
  public function __construct($name, $type, $comment = null)
  {
    $this->setName($name);
    $this->setType($type);
    $this->setComment($comment);
  }

  /**
   * Return the attribute name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set attribute name
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Return the attribute type
   *
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set attribute type
   * @param string $type (Full classname  namespace\class)
   */
  public function setType($type)
  {
    $result = Utils::getNamespace($type);    
    $this->type = $result['classname'];
    if ($result['namespace'] !== null) {
      $this->usedClasses = $result['namespace'].'\\'.$result['classname'];
    }
  }

  /**
   * Return the comment of object attribute
   *
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }

  /**
   * Set the comment of object attribute
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  /**
   * Return portion of attribute code
   * @return string
   */
  public function renderAttribute()
  {
    if ($this->getComment() == null) {
      $return = "  /**\n" . "   * ".$this->getName()." attribute\n";
    } else {
      $return = "  /**\n" . "   * ".$this->getComment()."\n";
    }

    $return .="   * @access public\n"
    . "   * @var ".$this->getType()."\n"
    . "   */\n"
    . "  ".'public $'.$this->getName().";\n\n";

    return $return;
  }

  /**
   * Return portion of "get" methode for attribute
   * @return string
   */
  public function renderGetter()
  {

    $methodGetter = new MethodWSDL(
        'get'.Container::camelize($this->getName()),
        $this->getType(),
        array(),
        array(),
        'Getter for '.$this->getName().' attribute');

    return $methodGetter->renderMethod("return \$this->".$this->getName().";");
  }

  /**
   * Return portion of "set" methode for attribute
   * @return string
   */
  public function renderSetter()
  {
    $methodSetter = new MethodWSDL(
        'set'.Container::camelize($this->getName()),
        null,
        array($this->getType() => $this->getName()),
        array(),
        'Setter for '.$this->getName().' attribute');

    return $methodSetter->renderMethod("\$this->".$this->getName()." = $".$this->getName().";");
  }

  /**
   * Return list of "use" declaration if attribute is a Object
   * @return array
   */
  public function getUsedClasses()
  {
    if ($this->usedClasses !== null) {
      return array($this->usedClasses => $this->usedClasses);
    }

    return array();
  }
}