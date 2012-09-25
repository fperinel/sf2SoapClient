<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GamesPerCityResponse class
 */
class GamesPerCityResponse
{

  /**
   * GamesPerCityResult attribute
   * @access public
   * @var TGameInfo[]
   */
  public $GamesPerCityResult;

  /**
   * Getter for GamesPerCityResult attribute
   *
   * @return TGameInfo[]
   */
  public function getGamesPerCityResult() {
    return $this->GamesPerCityResult;
  }

  /**
   * Setter for GamesPerCityResult attribute
   *
   * @param TGameInfo[] $GamesPerCityResult
   *
   * @return void
   */
  public function setGamesPerCityResult($GamesPerCityResult) {
    $this->GamesPerCityResult = $GamesPerCityResult;
  }

}
