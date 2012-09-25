<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TFullTeamInfo class
 */
class TFullTeamInfo
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

  /**
   * sCountryFlag attribute
   * @access public
   * @var string
   */
  public $sCountryFlag;

  /**
   * sCountryFlagLarge attribute
   * @access public
   * @var string
   */
  public $sCountryFlagLarge;

  /**
   * sCoach attribute
   * @access public
   * @var string
   */
  public $sCoach;

  /**
   * iCompeted attribute
   * @access public
   * @var integer
   */
  public $iCompeted;

  /**
   * sGoalKeepers attribute
   * @access public
   * @var string[]
   */
  public $sGoalKeepers;

  /**
   * sDefenders attribute
   * @access public
   * @var string[]
   */
  public $sDefenders;

  /**
   * sMidFields attribute
   * @access public
   * @var string[]
   */
  public $sMidFields;

  /**
   * sForwards attribute
   * @access public
   * @var string[]
   */
  public $sForwards;

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
   * Getter for sCountryFlag attribute
   *
   * @return string
   */
  public function getSCountryFlag() {
    return $this->sCountryFlag;
  }

  /**
   * Setter for sCountryFlag attribute
   *
   * @param string $sCountryFlag
   *
   * @return void
   */
  public function setSCountryFlag($sCountryFlag) {
    $this->sCountryFlag = $sCountryFlag;
  }

  /**
   * Getter for sCountryFlagLarge attribute
   *
   * @return string
   */
  public function getSCountryFlagLarge() {
    return $this->sCountryFlagLarge;
  }

  /**
   * Setter for sCountryFlagLarge attribute
   *
   * @param string $sCountryFlagLarge
   *
   * @return void
   */
  public function setSCountryFlagLarge($sCountryFlagLarge) {
    $this->sCountryFlagLarge = $sCountryFlagLarge;
  }

  /**
   * Getter for sCoach attribute
   *
   * @return string
   */
  public function getSCoach() {
    return $this->sCoach;
  }

  /**
   * Setter for sCoach attribute
   *
   * @param string $sCoach
   *
   * @return void
   */
  public function setSCoach($sCoach) {
    $this->sCoach = $sCoach;
  }

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
   * Getter for sGoalKeepers attribute
   *
   * @return string[]
   */
  public function getSGoalKeepers() {
    return $this->sGoalKeepers;
  }

  /**
   * Setter for sGoalKeepers attribute
   *
   * @param string[] $sGoalKeepers
   *
   * @return void
   */
  public function setSGoalKeepers($sGoalKeepers) {
    $this->sGoalKeepers = $sGoalKeepers;
  }

  /**
   * Getter for sDefenders attribute
   *
   * @return string[]
   */
  public function getSDefenders() {
    return $this->sDefenders;
  }

  /**
   * Setter for sDefenders attribute
   *
   * @param string[] $sDefenders
   *
   * @return void
   */
  public function setSDefenders($sDefenders) {
    $this->sDefenders = $sDefenders;
  }

  /**
   * Getter for sMidFields attribute
   *
   * @return string[]
   */
  public function getSMidFields() {
    return $this->sMidFields;
  }

  /**
   * Setter for sMidFields attribute
   *
   * @param string[] $sMidFields
   *
   * @return void
   */
  public function setSMidFields($sMidFields) {
    $this->sMidFields = $sMidFields;
  }

  /**
   * Getter for sForwards attribute
   *
   * @return string[]
   */
  public function getSForwards() {
    return $this->sForwards;
  }

  /**
   * Setter for sForwards attribute
   *
   * @param string[] $sForwards
   *
   * @return void
   */
  public function setSForwards($sForwards) {
    $this->sForwards = $sForwards;
  }

}
