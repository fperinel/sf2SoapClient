<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TCountrySelectedTopScorer class
 */
class TCountrySelectedTopScorer
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

  /**
   * iCount attribute
   * @access public
   * @var integer
   */
  public $iCount;

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
   * Getter for iCount attribute
   *
   * @return integer
   */
  public function getICount() {
    return $this->iCount;
  }

  /**
   * Setter for iCount attribute
   *
   * @param integer $iCount
   *
   * @return void
   */
  public function setICount(integer $iCount) {
    $this->iCount = $iCount;
  }

}
