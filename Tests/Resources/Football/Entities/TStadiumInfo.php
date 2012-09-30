<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TStadiumInfo class
 */
class TStadiumInfo
{

  /**
   * sStadiumName attribute
   * @access public
   * @var string
   */
  public $sStadiumName;

  /**
   * iSeatsCapacity attribute
   * @access public
   * @var integer
   */
  public $iSeatsCapacity;

  /**
   * sCityName attribute
   * @access public
   * @var string
   */
  public $sCityName;

  /**
   * sWikipediaURL attribute
   * @access public
   * @var string
   */
  public $sWikipediaURL;

  /**
   * sGoogleMapsURL attribute
   * @access public
   * @var string
   */
  public $sGoogleMapsURL;

  /**
   * Getter for sStadiumName attribute
   *
   * @return string
   */
  public function getSStadiumName() {
    return $this->sStadiumName;
  }

  /**
   * Setter for sStadiumName attribute
   *
   * @param string $sStadiumName
   *
   * @return void
   */
  public function setSStadiumName($sStadiumName) {
    $this->sStadiumName = $sStadiumName;
  }

  /**
   * Getter for iSeatsCapacity attribute
   *
   * @return integer
   */
  public function getISeatsCapacity() {
    return $this->iSeatsCapacity;
  }

  /**
   * Setter for iSeatsCapacity attribute
   *
   * @param integer $iSeatsCapacity
   *
   * @return void
   */
  public function setISeatsCapacity(integer $iSeatsCapacity) {
    $this->iSeatsCapacity = $iSeatsCapacity;
  }

  /**
   * Getter for sCityName attribute
   *
   * @return string
   */
  public function getSCityName() {
    return $this->sCityName;
  }

  /**
   * Setter for sCityName attribute
   *
   * @param string $sCityName
   *
   * @return void
   */
  public function setSCityName($sCityName) {
    $this->sCityName = $sCityName;
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
   * Getter for sGoogleMapsURL attribute
   *
   * @return string
   */
  public function getSGoogleMapsURL() {
    return $this->sGoogleMapsURL;
  }

  /**
   * Setter for sGoogleMapsURL attribute
   *
   * @param string $sGoogleMapsURL
   *
   * @return void
   */
  public function setSGoogleMapsURL($sGoogleMapsURL) {
    $this->sGoogleMapsURL = $sGoogleMapsURL;
  }

}
