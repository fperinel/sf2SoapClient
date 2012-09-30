<?php
namespace Level42\SoapClientBundle\Tests\Resources\Countries\Entities;



/**
 * IANAData class
 */
class IANAData
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

}
