<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TSignupCount class
 */
class TSignupCount
{

  /**
   * dSignup attribute
   * @access public
   * @var Date
   */
  public $dSignup;

  /**
   * iCount attribute
   * @access public
   * @var integer
   */
  public $iCount;

  /**
   * iTotal attribute
   * @access public
   * @var integer
   */
  public $iTotal;

  /**
   * iAverage attribute
   * @access public
   * @var integer
   */
  public $iAverage;

  /**
   * Getter for dSignup attribute
   *
   * @return Date
   */
  public function getDSignup() {
    return $this->dSignup;
  }

  /**
   * Setter for dSignup attribute
   *
   * @param Date $dSignup
   *
   * @return void
   */
  public function setDSignup(Date $dSignup) {
    $this->dSignup = $dSignup;
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

  /**
   * Getter for iTotal attribute
   *
   * @return integer
   */
  public function getITotal() {
    return $this->iTotal;
  }

  /**
   * Setter for iTotal attribute
   *
   * @param integer $iTotal
   *
   * @return void
   */
  public function setITotal(integer $iTotal) {
    $this->iTotal = $iTotal;
  }

  /**
   * Getter for iAverage attribute
   *
   * @return integer
   */
  public function getIAverage() {
    return $this->iAverage;
  }

  /**
   * Setter for iAverage attribute
   *
   * @param integer $iAverage
   *
   * @return void
   */
  public function setIAverage(integer $iAverage) {
    $this->iAverage = $iAverage;
  }

}
