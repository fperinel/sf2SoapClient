<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithYellowCardsResponse class
 */
class AllPlayersWithYellowCardsResponse
{

  /**
   * AllPlayersWithYellowCardsResult attribute
   * @access public
   * @var TPlayersWithCards[]
   */
  public $AllPlayersWithYellowCardsResult;

  /**
   * Getter for AllPlayersWithYellowCardsResult attribute
   *
   * @return TPlayersWithCards[]
   */
  public function getAllPlayersWithYellowCardsResult() {
    return $this->AllPlayersWithYellowCardsResult;
  }

  /**
   * Setter for AllPlayersWithYellowCardsResult attribute
   *
   * @param TPlayersWithCards[] $AllPlayersWithYellowCardsResult
   *
   * @return void
   */
  public function setAllPlayersWithYellowCardsResult($AllPlayersWithYellowCardsResult) {
    $this->AllPlayersWithYellowCardsResult = $AllPlayersWithYellowCardsResult;
  }

}
