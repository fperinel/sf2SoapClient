<?php
namespace Level42\SoapClientBundle\Services;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TTeamInfo;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Teams;

use Level42\SoapClientBundle\Tests\Resources\Football\Services\Info;

use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\IANAList;
use Level42\SoapClientBundle\Tests\Resources\Countries\Services\CountriesWebserviceMobilefishComService;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WSDLCallTest extends WebTestCase
{

  public function testCallCountrieWS()
  {
  	$generator = new WSDLGenerator('http://www.mobilefish.com/services/web_service/countries.php?wsdl', 'Level42\\SoapClientBundle\\Tests\\Resources\\Countries');
  	$entites = $generator->getEntitiesClasses();
  	$services = $generator->getServicesClasses();
  
  	$this->assertNotNull($entites);
  	foreach ($entites as $entite) {
  		/* @var $entite ClassWSDL */
  		file_put_contents('./src/Level42/SoapClientBundle/Tests/Resources/Countries/Entities/'.$entite->getName().'.php', $entite->renderClassCode());
  	}  
  	$this->assertNotNull($services);
  	foreach ($services as $service) {
  		/* @var $service ClassWSDL */
  		file_put_contents('./src/Level42/SoapClientBundle/Tests/Resources/Countries/Services/'.$service->getName().'.php', $service->renderClassCode());
  	}
  
  	$ws = new CountriesWebserviceMobilefishComService();
  	$list = $ws->getIANAInfo();
  	foreach($list as $value) {
  	  $this->assertNotNull($value[0], 'key is null');
  	  $this->assertNotNull($value[1], 'value is null');
  	}  	
  }

  public function testFootballWS()
  {
  	$generator = new WSDLGenerator('http://footballpool.dataaccess.eu/data/info.wso?WSDL', 'Level42\\SoapClientBundle\\Tests\\Resources\\Football');
  	$entites = $generator->getEntitiesClasses();
  	$services = $generator->getServicesClasses();
  
  	$this->assertNotNull($entites);
  	foreach ($entites as $entite) {
  		/* @var $entite ClassWSDL */
  		file_put_contents('./src/Level42/SoapClientBundle/Tests/Resources/Football/Entities/'.$entite->getName().'.php', $entite->renderClassCode());
  	}  
  	$this->assertNotNull($services);
  	foreach ($services as $service) {
  		/* @var $service ClassWSDL */
  		file_put_contents('./src/Level42/SoapClientBundle/Tests/Resources/Football/Services/'.$service->getName().'.php', $service->renderClassCode());
  	}
  
  	$ws = new Info();
  	$response = $ws->Teams(new Teams());
  	$this->assertNotNull($response->getTeamsResult());
  	$results = $response->getTeamsResult();
  	
  	foreach($results as $result) {
  	  /* @var $result TTeamInfo */
  	  $this->assertNotNull($result->getSName()); 
  	  $this->assertNotNull($result->getSCountryFlag());  	  
  	}
  }
}