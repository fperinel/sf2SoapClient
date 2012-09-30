<?php
namespace Level42\SoapClientBundle\Tests\Resources\Countries\Services;

use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\CountryData;
use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\RegionList;
use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\IANAList;
use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\NumberOfRequestData;
use \SoapClient;


/**
 * CountriesWebserviceMobilefishComService class
 */
class CountriesWebserviceMobilefishComService extends SoapClient
{

  /**
   * Default class map
   * @access private
   * @var array
   */
  private static $classmap = array(
    "CountryData" => "CountryData",
    "RegionList" => "RegionList",
    "IANAList" => "IANAList",
    "NumberOfRequestData" => "NumberOfRequestData",
  );

  /**
   * ClassService constructor
   *
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   *
   * @return ClassService
   */
  public function __construct($wsdl = 'http://www.mobilefish.com/services/web_service/countries.php?wsdl', $options = array()) {
    foreach (self::$classmap as $wsdlClassName => $phpClassName) {
      if (!isset($options['classmap'][$wsdlClassName])) {
        $options['classmap'][$wsdlClassName] = $phpClassName;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Return WSDL targetNamespace
   *
   * @return string
   */
  public function getTargetNamespace() {
    return "urn:countries.webservice.mobilefish.com";
  }

  /**
   * Set a SOAP header
   *
   * @param string $key Key of header value
   * @param mixed $value Value of header
   */
  public function setSoapHeader($key, $value = null) {
    $soapHeader = new SoapHeader($this->getTargetNamespace(), $key, $value);
    $this->__setSoapHeaders($soapHeader);
  }

  /**
   * Set multiple SOAP headers
   *
   * @param array $header  Associative array with key/value
   */
  public function setSoapHeaders($headers = array()) {
    $headers = array();
    foreach ($headers as $key => $value) {
      $headers[] = new SoapHeader($this->getTargetNamespace(), $key, $value);
    }
    $this->__setSoapHeaders($headers);
  }

  /**
   * countryInfoByIana method
   *
   * @param string $ianacode
   *
   * @return CountryData
   */
  public function countryInfoByIana($ianacode) {
    return parent::__soapCall('countryInfoByIana', func_get_args());
  }

  /**
   * regionsInfoByIana method
   *
   * @param string $ianacode
   *
   * @return RegionList
   */
  public function regionsInfoByIana($ianacode) {
    return parent::__soapCall('regionsInfoByIana', func_get_args());
  }

  /**
   * getIANAInfo method
   *
   * @return IANAList
   */
  public function getIANAInfo() {
    return parent::__soapCall('getIANAInfo', func_get_args());
  }

  /**
   * getNumberOfRequestLeft method
   *
   * @return NumberOfRequestData
   */
  public function getNumberOfRequestLeft() {
    return parent::__soapCall('getNumberOfRequestLeft', func_get_args());
  }

}
