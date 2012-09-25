<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllGamesResponse class
 */
class AllGamesResponse
{

  /**
   * AllGamesResult attribute
   * @access public
   * @var TGameInfo[]
   */
  public $AllGamesResult;

  /**
   * Getter for AllGamesResult attribute
   *
   * @return TGameInfo[]
   */
  public function getAllGamesResult() {
    return $this->AllGamesResult;
  }

  /**
   * Setter for AllGamesResult attribute
   *
   * @param TGameInfo[] $AllGamesResult
   *
   * @return void
   */
  public function setAllGamesResult($AllGamesResult) {
    $this->AllGamesResult = $AllGamesResult;
  }

}
