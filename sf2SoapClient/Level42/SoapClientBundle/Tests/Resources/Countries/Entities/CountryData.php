<?php
namespace Level42\SoapClientBundle\Tests\Resources\Countries\Entities;



/**
 * CountryData class
 */
class CountryData
{

  /**
   * ianacode attribute
   * @access public
   * @var string
   */
  public $ianacode;

  /**
   * countryname attribute
   * @access public
   * @var string
   */
  public $countryname;

  /**
   * latitude attribute
   * @access public
   * @var double
   */
  public $latitude;

  /**
   * longitude attribute
   * @access public
   * @var double
   */
  public $longitude;

  /**
   * Getter for ianacode attribute
   *
   * @return string
   */
  public function getIanacode() {
    return $this->ianacode;
  }

  /**
   * Setter for ianacode attribute
   *
   * @param string $ianacode
   *
   * @return void
   */
  public function setIanacode($ianacode) {
    $this->ianacode = $ianacode;
  }

  /**
   * Getter for countryname attribute
   *
   * @return string
   */
  public function getCountryname() {
    return $this->countryname;
  }

  /**
   * Setter for countryname attribute
   *
   * @param string $countryname
   *
   * @return void
   */
  public function setCountryname($countryname) {
    $this->countryname = $countryname;
  }

  /**
   * Getter for latitude attribute
   *
   * @return double
   */
  public function getLatitude() {
    return $this->latitude;
  }

  /**
   * Setter for latitude attribute
   *
   * @param double $latitude
   *
   * @return void
   */
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }

  /**
   * Getter for longitude attribute
   *
   * @return double
   */
  public function getLongitude() {
    return $this->longitude;
  }

  /**
   * Setter for longitude attribute
   *
   * @param double $longitude
   *
   * @return void
   */
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }

}
