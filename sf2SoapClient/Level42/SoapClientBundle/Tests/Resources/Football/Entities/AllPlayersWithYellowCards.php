<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithYellowCards class
 */
class AllPlayersWithYellowCards
{

  /**
   * bSortedByName attribute
   * @access public
   * @var boolean
   */
  public $bSortedByName;

  /**
   * bSortedByYellowCards attribute
   * @access public
   * @var boolean
   */
  public $bSortedByYellowCards;

  /**
   * Getter for bSortedByName attribute
   *
   * @return boolean
   */
  public function getBSortedByName() {
    return $this->bSortedByName;
  }

  /**
   * Setter for bSortedByName attribute
   *
   * @param boolean $bSortedByName
   *
   * @return void
   */
  public function setBSortedByName($bSortedByName) {
    $this->bSortedByName = $bSortedByName;
  }

  /**
   * Getter for bSortedByYellowCards attribute
   *
   * @return boolean
   */
  public function getBSortedByYellowCards() {
    return $this->bSortedByYellowCards;
  }

  /**
   * Setter for bSortedByYellowCards attribute
   *
   * @param boolean $bSortedByYellowCards
   *
   * @return void
   */
  public function setBSortedByYellowCards($bSortedByYellowCards) {
    $this->bSortedByYellowCards = $bSortedByYellowCards;
  }

}
