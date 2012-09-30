<?php

namespace Level42\SoapClientBundle\Tests\Entities;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Level42\SoapClientBundle\Entities\MethodWSDL;

/**
 * Test method for MethodWSDL class
 */
class MethodWSDLTest extends WebTestCase
{

  /**
   * Tested class
   *
   * @var MethodWSDL
   */
  private $method = null;

  /**
   * Set up the test class
   */
  public function setup()
  {
    $exceptions = array();
    $exceptions[] = 'ExceptionNamespace\ExceptionType1';
    $exceptions[] = 'ExceptionNamespace\ExceptionType2';

    $parameters = array();
    $parameters['int'] = 'int';
    $parameters['ArgNamespace\Type1'] = 'type1';
    $parameters['ArgNamespace\Type2'] = 'type2';

    $this->method = new MethodWSDL('MethodName', 'ReturnTypeNamespace\MethodReturnType', $parameters, $exceptions, 'MethodName comment');
  }

  /**
   * Test source code for attribute code portion
   */
  public function testRenderMethod1()
  {
    $actual = $this->method->renderMethod();

    $expected = "  /**\n"
    . "   * MethodName comment\n"
    . "   *\n"
    . "   * @param int \$int\n"
    . "   * @param Type1 \$type1\n"
    . "   * @param Type2 \$type2\n"
    . "   *\n"
    . "   * @return MethodReturnType\n"
    . "   *\n"
    . "   * @throws ExceptionType1\n"
    . "   * @throws ExceptionType2\n"
    . "   */\n"
    . "  ".'public function '.$this->method->getName().'($int, Type1 $type1, Type2 $type2) {'."\n"
    . "  }\n\n";

    $this->assertEquals($expected, $actual, 'Method render failed');
  }

  /**
   * Test source code for attribute code portion
   */
  public function testRenderMethod2()
  {
    $this->method->setComment(null);
    $actual = $this->method->renderMethod();

    $expected = "  /**\n"
    . "   * MethodName method\n"
    . "   *\n"
    . "   * @param int \$int\n"
    . "   * @param Type1 \$type1\n"
    . "   * @param Type2 \$type2\n"
    . "   *\n"
    . "   * @return MethodReturnType\n"
    . "   *\n"
    . "   * @throws ExceptionType1\n"
    . "   * @throws ExceptionType2\n"
    . "   */\n"
    . "  ".'public function '.$this->method->getName().'($int, Type1 $type1, Type2 $type2) {'."\n"
    . "  }\n\n";

    $this->assertEquals($expected, $actual, 'Method render failed');
  }

  /**
   * Test source code for attribute code portion
   */
  public function testRenderUse1()
  {
    $exceptions = array();
    $exceptions[] = 'ExceptionNamespace\ExceptionType1';
    $exceptions[] = 'ExceptionNamespace\ExceptionType2';

    $parameters = array();
    $parameters['int'] = 'int';
    $parameters['ArgNamespace\Type1'] = 'type1';
    $parameters['ArgNamespace\Type2'] = 'type2';

    $newMethod = new MethodWSDL('MethodName', 'ReturnTypeNamespace\MethodReturnType', $parameters, $exceptions, 'MethodName comment');
    $actual = $newMethod->renderUse();

    $expected = ""
    . "use ReturnTypeNamespace\\MethodReturnType;\n"
    . "use ArgNamespace\\Type1;\n"
    . "use ArgNamespace\\Type2;\n"
    . "use ExceptionNamespace\\ExceptionType1;\n"
    . "use ExceptionNamespace\\ExceptionType2;\n";

    $this->assertEquals($expected, $actual, 'Method use render failed');
  }

  /**
   * Test source code for attribute code portion
   */
  public function testRenderUse2()
  {
    $exceptions = array();

    $parameters = array();
    $parameters['int'] = 'int';

    $newMethod = new MethodWSDL('MethodName', null, $parameters, $exceptions, 'MethodName comment');
    $actual = $newMethod->renderUse();

    $expected = null;

    $this->assertEquals($expected, $actual, 'Method use render failed');
  }
}