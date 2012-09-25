<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TTeamInfo class
 */
class TTeamInfo
{

  /**
   * iId attribute
   * @access public
   * @var integer
   */
  public $iId;

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
   * sWikipediaURL attribute
   * @access public
   * @var string
   */
  public $sWikipediaURL;

  /**
   * sCountryFlagLarge attribute
   * @access public
   * @var string
   */
  public $sCountryFlagLarge;

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
   * Getter for sWikipediaURL attribute
   *
   * @return string
   */
  public function getSWikipediaURL() {
    return $this->sWikipediaURL;
  }

  /**
   * Setter for sWikipediaURL attribute
   *
   * @param string $sWikipediaURL
   *
   * @return void
   */
  public function setSWikipediaURL($sWikipediaURL) {
    $this->sWikipediaURL = $sWikipediaURL;
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

}
