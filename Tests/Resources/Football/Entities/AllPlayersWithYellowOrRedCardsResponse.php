<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithYellowOrRedCardsResponse class
 */
class AllPlayersWithYellowOrRedCardsResponse
{

  /**
   * AllPlayersWithYellowOrRedCardsResult attribute
   * @access public
   * @var TPlayersWithCards[]
   */
  public $AllPlayersWithYellowOrRedCardsResult;

  /**
   * Getter for AllPlayersWithYellowOrRedCardsResult attribute
   *
   * @return TPlayersWithCards[]
   */
  public function getAllPlayersWithYellowOrRedCardsResult() {
    return $this->AllPlayersWithYellowOrRedCardsResult;
  }

  /**
   * Setter for AllPlayersWithYellowOrRedCardsResult attribute
   *
   * @param TPlayersWithCards[] $AllPlayersWithYellowOrRedCardsResult
   *
   * @return void
   */
  public function setAllPlayersWithYellowOrRedCardsResult($AllPlayersWithYellowOrRedCardsResult) {
    $this->AllPlayersWithYellowOrRedCardsResult = $AllPlayersWithYellowOrRedCardsResult;
  }

}
