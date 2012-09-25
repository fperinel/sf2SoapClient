<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GamesPerCity class
 */
class GamesPerCity
{

  /**
   * sCityName attribute
   * @access public
   * @var string
   */
  public $sCityName;

  /**
   * Getter for sCityName attribute
   *
   * @return string
   */
  public function getSCityName() {
    return $this->sCityName;
  }

  /**
   * Setter for sCityName attribute
   *
   * @param string $sCityName
   *
   * @return void
   */
  public function setSCityName($sCityName) {
    $this->sCityName = $sCityName;
  }

}
