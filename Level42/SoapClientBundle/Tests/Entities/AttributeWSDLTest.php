<?php

namespace Level42\SoapClientBundle\Tests\Entities;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Level42\SoapClientBundle\Entities\AttributeWSDL;

/**
 * Test class for AttributeWSDL
 */
class AttributeWSDLTest extends WebTestCase
{

  /**
   * Tested class
   *
   * @var AttributeWSDL
   */
  private $attribute = null;

  /**
   * Set up the test class
   */
  public function setup()
  {
    $this->attribute = new AttributeWSDL('attributeName', 'attributeNamespace\attributeType', 'a new attribute to test');
  }

  /**
   * Test source code for attribute code portion
   */
  public function testRenderAttribute()
  {
    $actual = $this->attribute->renderAttribute();

    $expected = "  /**\n"
    . "   * a new attribute to test\n"
    . "   * @access public\n"
    . "   * @var ".$this->attribute->getType()."\n"
    . "   */\n"
    . "  ".'public $'.$this->attribute->getName().";\n\n";

    $this->assertEquals($expected, $actual, 'Attribute render failed');
  }

  /**
   * Test source for getter
   */
  public function testRenderGetter()
  {
    $actual = $this->attribute->renderGetter();

    $expected = "  /**\n"
    . "   * Getter for ".$this->attribute->getName()." attribute\n"
    . "   *\n"
    . "   * @return ".$this->attribute->getType()."\n"
    . "   */\n"
    . "  ".'public function get'.Container::camelize($this->attribute->getName())."() {\n"
    . "    return \$this->".$this->attribute->getName().";\n  }\n\n";

    $this->assertEquals($expected, $actual, 'Attribute getter render failed');
  }

  /**
   * Test source for setter
   */
  public function testRenderSetter()
  {
    $actual = $this->attribute->renderSetter();

    $expected = "  /**\n"
    . "   * Setter for ".$this->attribute->getName()." attribute\n"
    . "   *\n"
    . "   * @param ".$this->attribute->getType()." $".$this->attribute->getName()."\n"
    . "   *\n"
    . "   * @return void\n"
    . "   */\n"
    . "  ".'public function set'.Container::camelize($this->attribute->getName())."(".$this->attribute->getType()." $".$this->attribute->getName().") {\n"
    . "    \$this->".$this->attribute->getName()." = $".$this->attribute->getName().";\n  }\n\n";

    $this->assertEquals($expected, $actual, 'Attribute getter render failed');
  }

  /**
   * Test source for use
   */
  public function testRenderUse1()
  {
    $actual = $this->attribute->renderUse();

    $expected = "use attributeNamespace\\attributeType;\n";

    $this->assertEquals($expected, $actual, 'Attribute use render failed');
  }


  /**
   * Test source for use
   */
  public function testRenderUse2()
  {
    $attr = new AttributeWSDL('Test', 'int');
    $actual = $attr->renderUse();

    $expected = null;

    $this->assertEquals($expected, $actual, 'Attribute use render failed');
  }
}