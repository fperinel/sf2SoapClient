<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GameResultCodesResponse class
 */
class GameResultCodesResponse
{

  /**
   * GameResultCodesResult attribute
   * @access public
   * @var TGameResultCode[]
   */
  public $GameResultCodesResult;

  /**
   * Getter for GameResultCodesResult attribute
   *
   * @return TGameResultCode[]
   */
  public function getGameResultCodesResult() {
    return $this->GameResultCodesResult;
  }

  /**
   * Setter for GameResultCodesResult attribute
   *
   * @param TGameResultCode[] $GameResultCodesResult
   *
   * @return void
   */
  public function setGameResultCodesResult($GameResultCodesResult) {
    $this->GameResultCodesResult = $GameResultCodesResult;
  }

}
