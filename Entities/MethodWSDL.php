<?php

namespace Level42\SoapClientBundle\Entities;

use Level42\SoapClientBundle\Utils\Utils;

use Symfony\Component\DependencyInjection\Container;

/**
 * This class represent a generated method from a wsdl file
 */
class MethodWSDL
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
  private $returnType;

  /**
   * List of arguments for method
   * @var array
   */
  private $parameters;

  /**
   * List of exceptions for method
   * @var array
   */
  private $exceptions;

  /**
   * Method comment
   * @var string
   */
  private $comment;

  /**
   * Method content
   * @var string
   */
  private $content;
  
  /**
   * List of use class
   * @var array
   */
  private $usedClasses = array();

  /**
   * Constuctor for classe
   *
   * @param string $name       Method name
   * @param string $returnType Return type name (full classpath namespace\classname)
   * @param array  $parameters List of parameters Type => Name (type : full classpath namespace\classname)
   * @param array  $exceptions List of exceptions Type => Name (type : full classpath namespace\classname)
   * @param string $comment    Method comment
   * @param string $content    Method content
   *
   * @return MethodWSDL
   */
  public function __construct($name, $returnType = null, $parameters = null, $exceptions = null, $comment = null, $content = null)
  {
    $this->setName($name);
    $this->setReturnType($returnType);
    $this->setParameters($parameters);
    $this->setExceptions($exceptions);
    $this->setComment($comment);
    $this->setContent($content);
  }

  /**
   * Return the method name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set method name
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Return the method type
   *
   * @return string
   */
  public function getReturnType()
  {
    return $this->returnType;
  }

  /**
   * Set method type
   * @param string $returnType (with full pathclass : Namespace\Class)
   */
  public function setReturnType($returnType)
  {
    if ($returnType !== null) {
      $result = Utils::getNamespace($returnType);
      $this->returnType = $result['classname'];
      if ($result['namespace'] !== null) {
        $this->usedClasses[$result['namespace'].'\\'.$result['classname']] = $result['namespace'].'\\'.$result['classname'];
      }
    }
  }

  /**
   * Return the parameters of method
   *
   * @return array
   */
  public function getParameters()
  {
    return $this->parameters;
  }

  /**
   * Set the parameters of method
   * @param array $parameters (list with full pathclass : Namespace\Class)
   */
  public function setParameters($parameters)
  {
    if ($parameters !== null) {
      foreach ($parameters as $type => $param) {
        $result = Utils::getNamespace($type);
        $this->parameters[$result['classname']] = $param;
        if ($result['namespace'] !== null) {
          $this->usedClasses[$result['namespace'].'\\'.$result['classname']] = $result['namespace'].'\\'.$result['classname'];
        }
      }
    }
  }

  /**
   * Return the parameters of method
   *
   * @return array
   */
  public function getExceptions()
  {
    return $this->exceptions;
  }

  /**
   * Set the parameters of method
   * @param array $exceptions (list with full pathclass : Namespace\Class)
   */
  public function setExceptions($exceptions)
  {
    if ($exceptions !== null) {
      foreach ($exceptions as $exception) {
        $result = Utils::getNamespace($exception);
        $this->exceptions[] = $result['classname'];
        if ($result['namespace'] !== null) {
          $this->usedClasses[$result['namespace'].'\\'.$result['classname']] = $result['namespace'].'\\'.$result['classname'];
        }
      }
    }
  }

  /**
   * Return the comment of method
   *
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }

  /**
   * Set the comment of method
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  
  /**
   * Return the content of method
   *
   * @return string
   */
  public function getContent()
  {
  	return $this->content;
  }
  
  /**
   * Set the content of method
   * @param string $content
   */
  public function setContent($content)
  {
  	$this->content = $content;
  }
  
  /**
   * Return portion of method code
   *
   * @param string $content Content method code source
   *
   * @return string
   */
  public function renderMethod($content)
  {
    if($content != null) {
      $this->content = $content;
    }
    
    $return = $this->addComment();
    $return.= $this->addDefinition($this->content);
        
    return $return;
  }

  /**
   * Add method content
   *
   * @param string $content Content method code source
   *
   * @return string
   */
  protected function addDefinition($content)
  {
    $return = '  public function '.$this->getName().'(';
    // Add parameters
    $parameters = array();
    if (count($this->getParameters()) > 0) {
      foreach ($this->getParameters() as $key => $value) {
        $parameters[] = Utils::isPrimitive($key) === false ? "$key \$$value" : "\$$value";
      }
    }
    $return .= implode(', ', $parameters).')'." {\n";

    if ($content != null) {
      $return .= "    ".$content."\n";
    }
    $return .= "  "."}\n\n";

    return $return;
  }

  /**
   * Add a comment for a method
   *
   * @return string
   */
  protected function addComment()
  {
    if ($this->getComment() == null) {
      $return = "  /**\n" . "   * ".$this->getName()." method\n";
    } else {
      $return = "  /**\n" . "   * ".$this->getComment()."\n";
    }

    if (count($this->getParameters()) > 0) {
      $return .= "   *\n";

      // Add parameters
      foreach ($this->getParameters() as $key => $value) {
        $return .= "   * @param ".$key." \$$value\n";
      }
    }

    // Add return type
    $return .= "   *\n";
    $returnType = $this->getReturnType() == null ? 'void' : $this->getReturnType();
    $return .= "   * @return ".$returnType."\n";

    if (count($this->getExceptions()) > 0) {
      $return .= "   *\n";
      // Add Exceptions
      foreach ($this->getExceptions() as $key => $value) {
        $return .= "   * @throws $value\n";
      }
    }

    $return .= "   */\n";

    return $return;
  }

  /**
   * Return list of "use" declaration if methode use Object
   * @return array
   */
  public function getUsedClasses()
  {
    return $this->usedClasses;
  }
}