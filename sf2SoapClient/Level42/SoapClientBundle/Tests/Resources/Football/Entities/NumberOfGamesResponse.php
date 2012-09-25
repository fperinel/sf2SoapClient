<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * NumberOfGamesResponse class
 */
class NumberOfGamesResponse
{

  /**
   * NumberOfGamesResult attribute
   * @access public
   * @var integer
   */
  public $NumberOfGamesResult;

  /**
   * Getter for NumberOfGamesResult attribute
   *
   * @return integer
   */
  public function getNumberOfGamesResult() {
    return $this->NumberOfGamesResult;
  }

  /**
   * Setter for NumberOfGamesResult attribute
   *
   * @param integer $NumberOfGamesResult
   *
   * @return void
   */
  public function setNumberOfGamesResult(integer $NumberOfGamesResult) {
    $this->NumberOfGamesResult = $NumberOfGamesResult;
  }

}
