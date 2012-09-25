<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TTopGoalScorer class
 */
class TTopGoalScorer
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

  /**
   * iGoals attribute
   * @access public
   * @var integer
   */
  public $iGoals;

  /**
   * sCountry attribute
   * @access public
   * @var string
   */
  public $sCountry;

  /**
   * sFlag attribute
   * @access public
   * @var string
   */
  public $sFlag;

  /**
   * sFlagLarge attribute
   * @access public
   * @var string
   */
  public $sFlagLarge;

  /**
   * Getter for sName attribute
   *
   * @return string
   */
  public function getSName() {
    return $this->sName;
  }

  /**
   * Setter for sName attribute
   *
   * @param string $sName
   *
   * @return void
   */
  public function setSName($sName) {
    $this->sName = $sName;
  }

  /**
   * Getter for iGoals attribute
   *
   * @return integer
   */
  public function getIGoals() {
    return $this->iGoals;
  }

  /**
   * Setter for iGoals attribute
   *
   * @param integer $iGoals
   *
   * @return void
   */
  public function setIGoals(integer $iGoals) {
    $this->iGoals = $iGoals;
  }

  /**
   * Getter for sCountry attribute
   *
   * @return string
   */
  public function getSCountry() {
    return $this->sCountry;
  }

  /**
   * Setter for sCountry attribute
   *
   * @param string $sCountry
   *
   * @return void
   */
  public function setSCountry($sCountry) {
    $this->sCountry = $sCountry;
  }

  /**
   * Getter for sFlag attribute
   *
   * @return string
   */
  public function getSFlag() {
    return $this->sFlag;
  }

  /**
   * Setter for sFlag attribute
   *
   * @param string $sFlag
   *
   * @return void
   */
  public function setSFlag($sFlag) {
    $this->sFlag = $sFlag;
  }

  /**
   * Getter for sFlagLarge attribute
   *
   * @return string
   */
  public function getSFlagLarge() {
    return $this->sFlagLarge;
  }

  /**
   * Setter for sFlagLarge attribute
   *
   * @param string $sFlagLarge
   *
   * @return void
   */
  public function setSFlagLarge($sFlagLarge) {
    $this->sFlagLarge = $sFlagLarge;
  }

}
