<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TCoaches;


/**
 * TTeamCompete class
 */
class TTeamCompete
{

  /**
   * iCompeted attribute
   * @access public
   * @var integer
   */
  public $iCompeted;

  /**
   * iWon attribute
   * @access public
   * @var integer
   */
  public $iWon;

  /**
   * CoachInfo attribute
   * @access public
   * @var TCoaches
   */
  public $CoachInfo;

  /**
   * Getter for iCompeted attribute
   *
   * @return integer
   */
  public function getICompeted() {
    return $this->iCompeted;
  }

  /**
   * Setter for iCompeted attribute
   *
   * @param integer $iCompeted
   *
   * @return void
   */
  public function setICompeted(integer $iCompeted) {
    $this->iCompeted = $iCompeted;
  }

  /**
   * Getter for iWon attribute
   *
   * @return integer
   */
  public function getIWon() {
    return $this->iWon;
  }

  /**
   * Setter for iWon attribute
   *
   * @param integer $iWon
   *
   * @return void
   */
  public function setIWon(integer $iWon) {
    $this->iWon = $iWon;
  }

  /**
   * Getter for CoachInfo attribute
   *
   * @return TCoaches
   */
  public function getCoachInfo() {
    return $this->CoachInfo;
  }

  /**
   * Setter for CoachInfo attribute
   *
   * @param TCoaches $CoachInfo
   *
   * @return void
   */
  public function setCoachInfo(TCoaches $CoachInfo) {
    $this->CoachInfo = $CoachInfo;
  }

}
