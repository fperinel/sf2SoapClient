<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Time;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TStadiumInfo;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TTeamInfo;


/**
 * TGameInfo class
 */
class TGameInfo
{

  /**
   * iId attribute
   * @access public
   * @var integer
   */
  public $iId;

  /**
   * sDescription attribute
   * @access public
   * @var string
   */
  public $sDescription;

  /**
   * dPlayDate attribute
   * @access public
   * @var Date
   */
  public $dPlayDate;

  /**
   * tPlayTime attribute
   * @access public
   * @var Time
   */
  public $tPlayTime;

  /**
   * StadiumInfo attribute
   * @access public
   * @var TStadiumInfo
   */
  public $StadiumInfo;

  /**
   * Team1 attribute
   * @access public
   * @var TTeamInfo
   */
  public $Team1;

  /**
   * Team2 attribute
   * @access public
   * @var TTeamInfo
   */
  public $Team2;

  /**
   * sResult attribute
   * @access public
   * @var string
   */
  public $sResult;

  /**
   * sScore attribute
   * @access public
   * @var string
   */
  public $sScore;

  /**
   * iYellowCards attribute
   * @access public
   * @var integer
   */
  public $iYellowCards;

  /**
   * iRedCards attribute
   * @access public
   * @var integer
   */
  public $iRedCards;

  /**
   * Cards attribute
   * @access public
   * @var TGameCard[]
   */
  public $Cards;

  /**
   * Goals attribute
   * @access public
   * @var TGoal[]
   */
  public $Goals;

  /**
   * bChampion attribute
   * @access public
   * @var boolean
   */
  public $bChampion;

  /**
   * Getter for iId attribute
   *
   * @return integer
   */
  public function getIId() {
    return $this->iId;
  }

  /**
   * Setter for iId attribute
   *
   * @param integer $iId
   *
   * @return void
   */
  public function setIId(integer $iId) {
    $this->iId = $iId;
  }

  /**
   * Getter for sDescription attribute
   *
   * @return string
   */
  public function getSDescription() {
    return $this->sDescription;
  }

  /**
   * Setter for sDescription attribute
   *
   * @param string $sDescription
   *
   * @return void
   */
  public function setSDescription($sDescription) {
    $this->sDescription = $sDescription;
  }

  /**
   * Getter for dPlayDate attribute
   *
   * @return Date
   */
  public function getDPlayDate() {
    return $this->dPlayDate;
  }

  /**
   * Setter for dPlayDate attribute
   *
   * @param Date $dPlayDate
   *
   * @return void
   */
  public function setDPlayDate(Date $dPlayDate) {
    $this->dPlayDate = $dPlayDate;
  }

  /**
   * Getter for tPlayTime attribute
   *
   * @return Time
   */
  public function getTPlayTime() {
    return $this->tPlayTime;
  }

  /**
   * Setter for tPlayTime attribute
   *
   * @param Time $tPlayTime
   *
   * @return void
   */
  public function setTPlayTime(Time $tPlayTime) {
    $this->tPlayTime = $tPlayTime;
  }

  /**
   * Getter for StadiumInfo attribute
   *
   * @return TStadiumInfo
   */
  public function getStadiumInfo() {
    return $this->StadiumInfo;
  }

  /**
   * Setter for StadiumInfo attribute
   *
   * @param TStadiumInfo $StadiumInfo
   *
   * @return void
   */
  public function setStadiumInfo(TStadiumInfo $StadiumInfo) {
    $this->StadiumInfo = $StadiumInfo;
  }

  /**
   * Getter for Team1 attribute
   *
   * @return TTeamInfo
   */
  public function getTeam1() {
    return $this->Team1;
  }

  /**
   * Setter for Team1 attribute
   *
   * @param TTeamInfo $Team1
   *
   * @return void
   */
  public function setTeam1(TTeamInfo $Team1) {
    $this->Team1 = $Team1;
  }

  /**
   * Getter for Team2 attribute
   *
   * @return TTeamInfo
   */
  public function getTeam2() {
    return $this->Team2;
  }

  /**
   * Setter for Team2 attribute
   *
   * @param TTeamInfo $Team2
   *
   * @return void
   */
  public function setTeam2(TTeamInfo $Team2) {
    $this->Team2 = $Team2;
  }

  /**
   * Getter for sResult attribute
   *
   * @return string
   */
  public function getSResult() {
    return $this->sResult;
  }

  /**
   * Setter for sResult attribute
   *
   * @param string $sResult
   *
   * @return void
   */
  public function setSResult($sResult) {
    $this->sResult = $sResult;
  }

  /**
   * Getter for sScore attribute
   *
   * @return string
   */
  public function getSScore() {
    return $this->sScore;
  }

  /**
   * Setter for sScore attribute
   *
   * @param string $sScore
   *
   * @return void
   */
  public function setSScore($sScore) {
    $this->sScore = $sScore;
  }

  /**
   * Getter for iYellowCards attribute
   *
   * @return integer
   */
  public function getIYellowCards() {
    return $this->iYellowCards;
  }

  /**
   * Setter for iYellowCards attribute
   *
   * @param integer $iYellowCards
   *
   * @return void
   */
  public function setIYellowCards(integer $iYellowCards) {
    $this->iYellowCards = $iYellowCards;
  }

  /**
   * Getter for iRedCards attribute
   *
   * @return integer
   */
  public function getIRedCards() {
    return $this->iRedCards;
  }

  /**
   * Setter for iRedCards attribute
   *
   * @param integer $iRedCards
   *
   * @return void
   */
  public function setIRedCards(integer $iRedCards) {
    $this->iRedCards = $iRedCards;
  }

  /**
   * Getter for Cards attribute
   *
   * @return TGameCard[]
   */
  public function getCards() {
    return $this->Cards;
  }

  /**
   * Setter for Cards attribute
   *
   * @param TGameCard[] $Cards
   *
   * @return void
   */
  public function setCards($Cards) {
    $this->Cards = $Cards;
  }

  /**
   * Getter for Goals attribute
   *
   * @return TGoal[]
   */
  public function getGoals() {
    return $this->Goals;
  }

  /**
   * Setter for Goals attribute
   *
   * @param TGoal[] $Goals
   *
   * @return void
   */
  public function setGoals($Goals) {
    $this->Goals = $Goals;
  }

  /**
   * Getter for bChampion attribute
   *
   * @return boolean
   */
  public function getBChampion() {
    return $this->bChampion;
  }

  /**
   * Setter for bChampion attribute
   *
   * @param boolean $bChampion
   *
   * @return void
   */
  public function setBChampion($bChampion) {
    $this->bChampion = $bChampion;
  }

}
