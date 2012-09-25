<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithRedCardsResponse class
 */
class AllPlayersWithRedCardsResponse
{

  /**
   * AllPlayersWithRedCardsResult attribute
   * @access public
   * @var TPlayersWithCards[]
   */
  public $AllPlayersWithRedCardsResult;

  /**
   * Getter for AllPlayersWithRedCardsResult attribute
   *
   * @return TPlayersWithCards[]
   */
  public function getAllPlayersWithRedCardsResult() {
    return $this->AllPlayersWithRedCardsResult;
  }

  /**
   * Setter for AllPlayersWithRedCardsResult attribute
   *
   * @param TPlayersWithCards[] $AllPlayersWithRedCardsResult
   *
   * @return void
   */
  public function setAllPlayersWithRedCardsResult($AllPlayersWithRedCardsResult) {
    $this->AllPlayersWithRedCardsResult = $AllPlayersWithRedCardsResult;
  }

}
