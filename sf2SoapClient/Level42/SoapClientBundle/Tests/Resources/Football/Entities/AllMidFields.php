<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllMidFields class
 */
class AllMidFields
{

  /**
   * sCountryName attribute
   * @access public
   * @var string
   */
  public $sCountryName;

  /**
   * Getter for sCountryName attribute
   *
   * @return string
   */
  public function getSCountryName() {
    return $this->sCountryName;
  }

  /**
   * Setter for sCountryName attribute
   *
   * @param string $sCountryName
   *
   * @return void
   */
  public function setSCountryName($sCountryName) {
    $this->sCountryName = $sCountryName;
  }

}
