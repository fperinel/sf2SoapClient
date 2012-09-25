<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TCountryInfo class
 */
class TCountryInfo
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
   * sIsoCode attribute
   * @access public
   * @var string
   */
  public $sIsoCode;

  /**
   * iPersons attribute
   * @access public
   * @var integer
   */
  public $iPersons;

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
   * Getter for sIsoCode attribute
   *
   * @return string
   */
  public function getSIsoCode() {
    return $this->sIsoCode;
  }

  /**
   * Setter for sIsoCode attribute
   *
   * @param string $sIsoCode
   *
   * @return void
   */
  public function setSIsoCode($sIsoCode) {
    $this->sIsoCode = $sIsoCode;
  }

  /**
   * Getter for iPersons attribute
   *
   * @return integer
   */
  public function getIPersons() {
    return $this->iPersons;
  }

  /**
   * Setter for iPersons attribute
   *
   * @param integer $iPersons
   *
   * @return void
   */
  public function setIPersons(integer $iPersons) {
    $this->iPersons = $iPersons;
  }

}
