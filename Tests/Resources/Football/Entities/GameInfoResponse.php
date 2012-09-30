<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TGameInfo;


/**
 * GameInfoResponse class
 */
class GameInfoResponse
{

  /**
   * GameInfoResult attribute
   * @access public
   * @var TGameInfo
   */
  public $GameInfoResult;

  /**
   * Getter for GameInfoResult attribute
   *
   * @return TGameInfo
   */
  public function getGameInfoResult() {
    return $this->GameInfoResult;
  }

  /**
   * Setter for GameInfoResult attribute
   *
   * @param TGameInfo $GameInfoResult
   *
   * @return void
   */
  public function setGameInfoResult(TGameInfo $GameInfoResult) {
    $this->GameInfoResult = $GameInfoResult;
  }

}
