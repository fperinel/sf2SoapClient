<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TGameCard class
 */
class TGameCard
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
   * sTeamName attribute
   * @access public
   * @var string
   */
  public $sTeamName;

  /**
   * sTeamFlag attribute
   * @access public
   * @var string
   */
  public $sTeamFlag;

  /**
   * sTeamFlagLarge attribute
   * @access public
   * @var string
   */
  public $sTeamFlagLarge;

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
   * Getter for sTeamName attribute
   *
   * @return string
   */
  public function getSTeamName() {
    return $this->sTeamName;
  }

  /**
   * Setter for sTeamName attribute
   *
   * @param string $sTeamName
   *
   * @return void
   */
  public function setSTeamName($sTeamName) {
    $this->sTeamName = $sTeamName;
  }

  /**
   * Getter for sTeamFlag attribute
   *
   * @return string
   */
  public function getSTeamFlag() {
    return $this->sTeamFlag;
  }

  /**
   * Setter for sTeamFlag attribute
   *
   * @param string $sTeamFlag
   *
   * @return void
   */
  public function setSTeamFlag($sTeamFlag) {
    $this->sTeamFlag = $sTeamFlag;
  }

  /**
   * Getter for sTeamFlagLarge attribute
   *
   * @return string
   */
  public function getSTeamFlagLarge() {
    return $this->sTeamFlagLarge;
  }

  /**
   * Setter for sTeamFlagLarge attribute
   *
   * @param string $sTeamFlagLarge
   *
   * @return void
   */
  public function setSTeamFlagLarge($sTeamFlagLarge) {
    $this->sTeamFlagLarge = $sTeamFlagLarge;
  }

}
