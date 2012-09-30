<?php

namespace Level42\SoapClientBundle\Tests\Entities;

use Level42\SoapClientBundle\Entities\MethodWSDL;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Level42\SoapClientBundle\Entities\ClassWSDL;
use Level42\SoapClientBundle\Entities\AttributeWSDL;

/**
 * Test method for ClassWSDL class
 */
class ClassWSDLTest extends WebTestCase
{
  /**
   * Test source code for entity class code portion
   */
  public function testEntityRenderClassCode()
  {
    $classEntityTest = new ClassWSDL();

    $attributes = array();
    $attributes[] = new AttributeWSDL('attributeName1', "attributeNamespace\\AttributeType1");

    $classEntityTest->setName('ClassEntity');
    $classEntityTest->setNamespace('ClassNamespace');
    $classEntityTest->setExtends('ClassNamespace\\SoapEntity');
    $classEntityTest->setAttributes($attributes);
    $classEntityTest->addAttribute('attributeName2', 'string');
    $classEntityTest->addAttribute('attributeName3', 'boolean');

    $actual = $classEntityTest->renderClassCode();

    $expected = file_get_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'ClassEntity.php.sample');

    file_put_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'ClassEntity.result.php', $actual);

    $this->assertEquals($expected, $actual, 'Class entity render failed');
  }

  /**
   * Test source code for service class code portion
   */
  public function testServiceRenderClassCode()
  {
    $classServiceTest = new ClassWSDL(ClassWSDL::TYPESERVICE, 'http://www.wsdl.example.fr', 'http://www.wsdl.example.fr/targetnamespace');

    $methods = array();

    $exceptions = array();
    $exceptions[] = 'ExceptionNamespace\\ExceptionType1';
    $exceptions[] = 'ExceptionNamespace\\ExceptionType2';

    $parameters = array();
    $parameters['int'] = 'arg1';
    $parameters['ArgNamespace\\Type1'] = 'arg2';
    $parameters['ArgNamespace\\Type2'] = 'arg3';

    $methods[] = new MethodWSDL('method1', null, $parameters, $exceptions);

    $exceptions = array();
    $exceptions[] = 'ExceptionNamespace\\ExceptionType1';

    $parameters = array();
    $parameters['int'] = 'arg1';
    $parameters['string'] = 'arg2';

    $classServiceTest->setName('ClassService');
    $classServiceTest->setNamespace('ClassNamespace');
    $classServiceTest->setMethods($methods);
    $classServiceTest->addMethod(new MethodWSDL('method2', null, $parameters, $exceptions));
    $classServiceTest->setExtends('\\ClassExtends');

    $classServiceTest->addToClassmap('wsdlObj1', 'WsdlObj1');
    $classServiceTest->addToClassmap('wsdlObj2', 'WsdlObj2');

    $actual = $classServiceTest->renderClassCode();

    $expected = file_get_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'ClassService.php.sample');

    //file_put_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.'ClassService.result.php', $actual);

    $this->assertEquals($expected, $actual, 'Class service render failed');
  }
}