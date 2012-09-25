<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * CountryNamesResponse class
 */
class CountryNamesResponse
{

  /**
   * CountryNamesResult attribute
   * @access public
   * @var TCountryInfo[]
   */
  public $CountryNamesResult;

  /**
   * Getter for CountryNamesResult attribute
   *
   * @return TCountryInfo[]
   */
  public function getCountryNamesResult() {
    return $this->CountryNamesResult;
  }

  /**
   * Setter for CountryNamesResult attribute
   *
   * @param TCountryInfo[] $CountryNamesResult
   *
   * @return void
   */
  public function setCountryNamesResult($CountryNamesResult) {
    $this->CountryNamesResult = $CountryNamesResult;
  }

}
