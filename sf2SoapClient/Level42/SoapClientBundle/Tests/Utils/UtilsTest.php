<?php
namespace Level42\SoapClientBundle\Tests\Utils;

use Level42\SoapClientBundle\Utils\Utils;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use \Exception;

/**
 * Tests for SoapClient tools class
 */
class UtilsTest extends WebTestCase
{

  /**
   * Test full classpath split #1
   */
  public function testGetNamespace1()
  {

    $expected = array('namespace' => null, 'classname' => 'Example');
    $actual = Utils::getNamespace("Example");

    $this->assertEquals($expected['namespace'], $actual['namespace'], 'Namespace error');
    $this->assertEquals($expected['classname'], $actual['classname'], 'Classname error');
  }

  /**
   * Test full classpath split #2
   */
  public function testGetNamespace2()
  {

    $expected = array('namespace' => 'Namespace1\Namespace2\Namespace3', 'classname' => 'Example');
    $actual = Utils::getNamespace("Namespace1\Namespace2\Namespace3\Example");

    $this->assertEquals($expected['namespace'], $actual['namespace'], 'Namespace error');
    $this->assertEquals($expected['classname'], $actual['classname'], 'Classname error');
  }

  /**
   * Test full classpath split #3
   */
  public function testGetNamespace3()
  {

    $expected = array('namespace' => 'Namespace1', 'classname' => 'Example');
    $actual = Utils::getNamespace("Namespace1\Example");

    $this->assertEquals($expected['namespace'], $actual['namespace'], 'Namespace error');
    $this->assertEquals($expected['classname'], $actual['classname'], 'Classname error');
  }

  /**
   * Test full classpath split #3
  */
  public function testGetNamespace4()
  {
    try {
      Utils::getNamespace(null);
      $this->assertTrue(false, 'No Exception detected');
    } catch (Exception $ex) {
      $this->assertTrue(true);
    }
  }
}