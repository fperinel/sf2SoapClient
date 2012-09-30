<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayersWithYellowOrRedCards class
 */
class AllPlayersWithYellowOrRedCards
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
