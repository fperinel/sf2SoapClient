<?php 
namespace Level42\SoapClientBundle\Utils;

use Doctrine\Common\Util\Inflector;

use \Exception;

/**
 * Tools class for SoapClient bundle
 */
class Utils
{

  /**
   * This method return true if type is a primitive
   *
   * @param string $type Type to analyse
   *
   * @return boolean
   */
  public static function isPrimitive($type)
  {
    $primitives = array('string', 'boolean', 'int', 'long', 'double');

    // Is an array ?
    if(substr($type, strlen($type)-2) == '[]') {
      return true;
    }
    if(substr($type, 0, 7) == 'ArrayOf') {
      return true;
    }

    // Is a primitive
    return (in_array($type, $primitives) !== false);
  }

  /**
   * This method return a valid name
   *
   * @param string $name Name
   *
   * @return string
   */
  public static function getValidName($name)
  {
    if(!self::isPrimitive($name)) {
      $name = str_replace('.', '_', $name);
      $name = ucfirst(Inflector::camelize($name));
    }
    return $name;
  }

  /**
   * This method return a valid type for an object
   *
   * @param string $type Type name
   *
   * @return string
   */
  public static function getValidType($type)
  {
    // Delete namespace
    $part = explode(':', $type);
    $type = (count($part) > 1 ? $part[1] : $part[0]);
    
    $array = false;
    if (substr($type, -2) == "[]")
    {
      $array = true;
      $type = substr($type, 0, -2);
    }
    if (substr($type, 0, 7) == "ArrayOf")
    {
      $array = true;
      $type = substr($type, 7);
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
        $validType = self::getValidName($type);
        break;
    }
    if ($array)
    {
      $validType .= "[]";
    }
    return $validType;
  }

  /**
   * This method split namespace and classname from a full classpath
   *
   * @param string $fullClassPath Full classname
   *
   * @return array
   *
   * @throws Exception If argument is empty
   *
   * @example
   *   call : getNamespace("\\Namespace\Classname")
   *   return : array('namespace' => 'Namespace' , 'classname' => 'Classname')
   */
  public static function getNamespace($fullClassPath)
  {
    if ($fullClassPath == null) {
      throw new Exception('Namespace error fullClassPath undefined');
    }

    $parts = explode("\\", $fullClassPath);

    if (count($parts) > 1) {
      $className = implode('', array_slice($parts, -1, 1));
      $nameSpace = implode("\\", array_slice($parts, 0, count($parts) - 1));
    } else {
      $className = implode('', array_slice($parts, -1, 1));
      $nameSpace = null;
    }

    return array('namespace' => $nameSpace , 'classname' => $className);
  }

}