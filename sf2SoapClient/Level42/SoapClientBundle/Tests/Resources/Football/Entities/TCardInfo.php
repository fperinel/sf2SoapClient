<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TCardInfo class
 */
class TCardInfo
{

  /**
   * dGame attribute
   * @access public
   * @var Date
   */
  public $dGame;

  /**
   * iMinute attribute
   * @access public
   * @var integer
   */
  public $iMinute;

  /**
   * sGameTeam1 attribute
   * @access public
   * @var string
   */
  public $sGameTeam1;

  /**
   * sGameTeam2 attribute
   * @access public
   * @var string
   */
  public $sGameTeam2;

  /**
   * sPlayerName attribute
   * @access public
   * @var string
   */
  public $sPlayerName;

  /**
   * bYellowCard attribute
   * @access public
   * @var boolean
   */
  public $bYellowCard;

  /**
   * bRedCard attribute
   * @access public
   * @var boolean
   */
  public $bRedCard;

  /**
   * sGameTeam1Flag attribute
   * @access public
   * @var string
   */
  public $sGameTeam1Flag;

  /**
   * sGameTeam1FlagLarge attribute
   * @access public
   * @var string
   */
  public $sGameTeam1FlagLarge;

  /**
   * sGameTeam2Flag attribute
   * @access public
   * @var string
   */
  public $sGameTeam2Flag;

  /**
   * sGameTeam2FlagLarge attribute
   * @access public
   * @var string
   */
  public $sGameTeam2FlagLarge;

  /**
   * sPlayerFlag attribute
   * @access public
   * @var string
   */
  public $sPlayerFlag;

  /**
   * sPlayerFlagLarge attribute
   * @access public
   * @var string
   */
  public $sPlayerFlagLarge;

  /**
   * Getter for dGame attribute
   *
   * @return Date
   */
  public function getDGame() {
    return $this->dGame;
  }

  /**
   * Setter for dGame attribute
   *
   * @param Date $dGame
   *
   * @return void
   */
  public function setDGame(Date $dGame) {
    $this->dGame = $dGame;
  }

  /**
   * Getter for iMinute attribute
   *
   * @return integer
   */
  public function getIMinute() {
    return $this->iMinute;
  }

  /**
   * Setter for iMinute attribute
   *
   * @param integer $iMinute
   *
   * @return void
   */
  public function setIMinute(integer $iMinute) {
    $this->iMinute = $iMinute;
  }

  /**
   * Getter for sGameTeam1 attribute
   *
   * @return string
   */
  public function getSGameTeam1() {
    return $this->sGameTeam1;
  }

  /**
   * Setter for sGameTeam1 attribute
   *
   * @param string $sGameTeam1
   *
   * @return void
   */
  public function setSGameTeam1($sGameTeam1) {
    $this->sGameTeam1 = $sGameTeam1;
  }

  /**
   * Getter for sGameTeam2 attribute
   *
   * @return string
   */
  public function getSGameTeam2() {
    return $this->sGameTeam2;
  }

  /**
   * Setter for sGameTeam2 attribute
   *
   * @param string $sGameTeam2
   *
   * @return void
   */
  public function setSGameTeam2($sGameTeam2) {
    $this->sGameTeam2 = $sGameTeam2;
  }

  /**
   * Getter for sPlayerName attribute
   *
   * @return string
   */
  public function getSPlayerName() {
    return $this->sPlayerName;
  }

  /**
   * Setter for sPlayerName attribute
   *
   * @param string $sPlayerName
   *
   * @return void
   */
  public function setSPlayerName($sPlayerName) {
    $this->sPlayerName = $sPlayerName;
  }

  /**
   * Getter for bYellowCard attribute
   *
   * @return boolean
   */
  public function getBYellowCard() {
    return $this->bYellowCard;
  }

  /**
   * Setter for bYellowCard attribute
   *
   * @param boolean $bYellowCard
   *
   * @return void
   */
  public function setBYellowCard($bYellowCard) {
    $this->bYellowCard = $bYellowCard;
  }

  /**
   * Getter for bRedCard attribute
   *
   * @return boolean
   */
  public function getBRedCard() {
    return $this->bRedCard;
  }

  /**
   * Setter for bRedCard attribute
   *
   * @param boolean $bRedCard
   *
   * @return void
   */
  public function setBRedCard($bRedCard) {
    $this->bRedCard = $bRedCard;
  }

  /**
   * Getter for sGameTeam1Flag attribute
   *
   * @return string
   */
  public function getSGameTeam1Flag() {
    return $this->sGameTeam1Flag;
  }

  /**
   * Setter for sGameTeam1Flag attribute
   *
   * @param string $sGameTeam1Flag
   *
   * @return void
   */
  public function setSGameTeam1Flag($sGameTeam1Flag) {
    $this->sGameTeam1Flag = $sGameTeam1Flag;
  }

  /**
   * Getter for sGameTeam1FlagLarge attribute
   *
   * @return string
   */
  public function getSGameTeam1FlagLarge() {
    return $this->sGameTeam1FlagLarge;
  }

  /**
   * Setter for sGameTeam1FlagLarge attribute
   *
   * @param string $sGameTeam1FlagLarge
   *
   * @return void
   */
  public function setSGameTeam1FlagLarge($sGameTeam1FlagLarge) {
    $this->sGameTeam1FlagLarge = $sGameTeam1FlagLarge;
  }

  /**
   * Getter for sGameTeam2Flag attribute
   *
   * @return string
   */
  public function getSGameTeam2Flag() {
    return $this->sGameTeam2Flag;
  }

  /**
   * Setter for sGameTeam2Flag attribute
   *
   * @param string $sGameTeam2Flag
   *
   * @return void
   */
  public function setSGameTeam2Flag($sGameTeam2Flag) {
    $this->sGameTeam2Flag = $sGameTeam2Flag;
  }

  /**
   * Getter for sGameTeam2FlagLarge attribute
   *
   * @return string
   */
  public function getSGameTeam2FlagLarge() {
    return $this->sGameTeam2FlagLarge;
  }

  /**
   * Setter for sGameTeam2FlagLarge attribute
   *
   * @param string $sGameTeam2FlagLarge
   *
   * @return void
   */
  public function setSGameTeam2FlagLarge($sGameTeam2FlagLarge) {
    $this->sGameTeam2FlagLarge = $sGameTeam2FlagLarge;
  }

  /**
   * Getter for sPlayerFlag attribute
   *
   * @return string
   */
  public function getSPlayerFlag() {
    return $this->sPlayerFlag;
  }

  /**
   * Setter for sPlayerFlag attribute
   *
   * @param string $sPlayerFlag
   *
   * @return void
   */
  public function setSPlayerFlag($sPlayerFlag) {
    $this->sPlayerFlag = $sPlayerFlag;
  }

  /**
   * Getter for sPlayerFlagLarge attribute
   *
   * @return string
   */
  public function getSPlayerFlagLarge() {
    return $this->sPlayerFlagLarge;
  }

  /**
   * Setter for sPlayerFlagLarge attribute
   *
   * @param string $sPlayerFlagLarge
   *
   * @return void
   */
  public function setSPlayerFlagLarge($sPlayerFlagLarge) {
    $this->sPlayerFlagLarge = $sPlayerFlagLarge;
  }

}
