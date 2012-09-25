<?php
namespace Level42\SoapClientBundle\Tests\Resources\Countries\Entities;



/**
 * RegionsData class
 */
class RegionsData
{

  /**
   * ianacode attribute
   * @access public
   * @var string
   */
  public $ianacode;

  /**
   * regionname attribute
   * @access public
   * @var string
   */
  public $regionname;

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
   * Getter for regionname attribute
   *
   * @return string
   */
  public function getRegionname() {
    return $this->regionname;
  }

  /**
   * Setter for regionname attribute
   *
   * @param string $regionname
   *
   * @return void
   */
  public function setRegionname($regionname) {
    $this->regionname = $regionname;
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
