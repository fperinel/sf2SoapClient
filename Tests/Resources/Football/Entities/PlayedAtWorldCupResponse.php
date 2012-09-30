<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * PlayedAtWorldCupResponse class
 */
class PlayedAtWorldCupResponse
{

  /**
   * PlayedAtWorldCupResult attribute
   * @access public
   * @var integer
   */
  public $PlayedAtWorldCupResult;

  /**
   * Getter for PlayedAtWorldCupResult attribute
   *
   * @return integer
   */
  public function getPlayedAtWorldCupResult() {
    return $this->PlayedAtWorldCupResult;
  }

  /**
   * Setter for PlayedAtWorldCupResult attribute
   *
   * @param integer $PlayedAtWorldCupResult
   *
   * @return void
   */
  public function setPlayedAtWorldCupResult(integer $PlayedAtWorldCupResult) {
    $this->PlayedAtWorldCupResult = $PlayedAtWorldCupResult;
  }

}
