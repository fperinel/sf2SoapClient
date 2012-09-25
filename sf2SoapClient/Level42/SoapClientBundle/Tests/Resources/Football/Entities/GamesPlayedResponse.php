<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * GamesPlayedResponse class
 */
class GamesPlayedResponse
{

  /**
   * GamesPlayedResult attribute
   * @access public
   * @var integer
   */
  public $GamesPlayedResult;

  /**
   * Getter for GamesPlayedResult attribute
   *
   * @return integer
   */
  public function getGamesPlayedResult() {
    return $this->GamesPlayedResult;
  }

  /**
   * Setter for GamesPlayedResult attribute
   *
   * @param integer $GamesPlayedResult
   *
   * @return void
   */
  public function setGamesPlayedResult(integer $GamesPlayedResult) {
    $this->GamesPlayedResult = $GamesPlayedResult;
  }

}
