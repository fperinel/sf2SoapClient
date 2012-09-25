<?php
namespace Level42\SoapClientBundle\Services;


use \DOMDocument;
use \DOMXPath;
use \XSLTProcessor;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use Level42\SoapClientBundle\Exceptions\WSDLInterpreterException;
use Level42\SoapClientBundle\Entities\ClassWSDL;
use Level42\SoapClientBundle\Entities\AttributeWSDL;
use Level42\SoapClientBundle\Entities\MethodWSDL;

/**
 * Main class to generate PHP class from WSDL file
 *
 * Original class : WSDLInterpreter
 * The WSDLInterpreter is utilized for the parsing of a WSDL document for rapid
 * and flexible use within the context of PHP 5 scripts.
 */
class WSDLGeneratorTest extends WebTestCase
{
  const WSDL_URL = './src/Level42/SoapClientBundle/Tests/Resources/wsdl1.wsdl';
  const OUTPUT = './src/Level42/SoapClientBundle/Tests/Resources/Generated/Wsdl1';
  const WSDL_NB_ENTITIES = 87;
  const WSDL_NB_SERVICES = 1;
  const WSDL_NB_METHODS = 30;

  public function testGetEntitiesClasses()
  {
    $generator = new WSDLGenerator(self::WSDL_URL, 'Level42\\SoapClientBundle\\Tests\\Resources\\Generated\\Wsdl1');
    $entites = $generator->getEntitiesClasses();

    $this->assertNotNull($entites);
    $this->assertTrue(is_array($entites), "Entities not an array");
    $this->assertTrue(count($entites) > 0, "Entities empty array");
    foreach ($entites as $entite) {
      /* @var $entite ClassWSDL */
      $this->assertNotNull($entite->getName());
      $exceptedContent = file_get_contents(self::OUTPUT.DIRECTORY_SEPARATOR.$entite->getName().'.php');
      if($exceptedContent !== false) {
        $this->assertEquals($exceptedContent, $entite->renderClassCode());
      }
    }

    $this->assertEquals(self::WSDL_NB_ENTITIES, count($entites));

  }

  public function testGetServicesClasses()
  {
    $generator = new WSDLGenerator(self::WSDL_URL, 'Level42\\SoapClientBundle\\Tests\\Resources\\Generated\\Wsdl1');
    $services = $generator->getServicesClasses();

    $this->assertNotNull($services);
    $this->assertTrue(is_array($services), "Services Not an array");
    $this->assertTrue(count($services) > 0, "Services Empty array");
    foreach ($services as $service) {
      /* @var $service ClassWSDL */
      $this->assertNotNull($service->getName());
      $exceptedContent = file_get_contents(self::OUTPUT.DIRECTORY_SEPARATOR.$service->getName().'.php');
      if($exceptedContent !== false) {
        $this->assertEquals($exceptedContent, $service->renderClassCode());
      }
    }
    $this->assertEquals(self::WSDL_NB_SERVICES, count($services));

    $methods = $service->getMethods();
    $this->assertTrue(is_array($methods), "Methods Not an array");
    $this->assertTrue(count($methods) > 0, "Methods Empty array");
    $this->assertNotNull($methods);
    foreach ($methods as $method) {
      /* @var $method MethodWSDL */
      $this->assertNotNull($method->getName());
    }
    $this->assertEquals(self::WSDL_NB_METHODS, count($methods));
  }
}