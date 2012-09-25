<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithRedCards class
 */
class AllPlayersWithRedCards
{

  /**
   * bSortedByName attribute
   * @access public
   * @var boolean
   */
  public $bSortedByName;

  /**
   * bSortedByRedCards attribute
   * @access public
   * @var boolean
   */
  public $bSortedByRedCards;

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
   * Getter for bSortedByRedCards attribute
   *
   * @return boolean
   */
  public function getBSortedByRedCards() {
    return $this->bSortedByRedCards;
  }

  /**
   * Setter for bSortedByRedCards attribute
   *
   * @param boolean $bSortedByRedCards
   *
   * @return void
   */
  public function setBSortedByRedCards($bSortedByRedCards) {
    $this->bSortedByRedCards = $bSortedByRedCards;
  }

}
