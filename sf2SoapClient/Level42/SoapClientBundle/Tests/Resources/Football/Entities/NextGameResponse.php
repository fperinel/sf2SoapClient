<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TGameInfo;


/**
 * NextGameResponse class
 */
class NextGameResponse
{

  /**
   * NextGameResult attribute
   * @access public
   * @var TGameInfo
   */
  public $NextGameResult;

  /**
   * Getter for NextGameResult attribute
   *
   * @return TGameInfo
   */
  public function getNextGameResult() {
    return $this->NextGameResult;
  }

  /**
   * Setter for NextGameResult attribute
   *
   * @param TGameInfo $NextGameResult
   *
   * @return void
   */
  public function setNextGameResult(TGameInfo $NextGameResult) {
    $this->NextGameResult = $NextGameResult;
  }

}
