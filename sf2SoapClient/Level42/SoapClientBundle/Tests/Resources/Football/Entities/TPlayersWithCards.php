<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TPlayersWithCards class
 */
class TPlayersWithCards
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

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
