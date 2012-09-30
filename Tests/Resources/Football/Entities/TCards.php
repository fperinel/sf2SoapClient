<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TCards class
 */
class TCards
{

  /**
   * iYellow attribute
   * @access public
   * @var integer
   */
  public $iYellow;

  /**
   * iRed attribute
   * @access public
   * @var integer
   */
  public $iRed;

  /**
   * Getter for iYellow attribute
   *
   * @return integer
   */
  public function getIYellow() {
    return $this->iYellow;
  }

  /**
   * Setter for iYellow attribute
   *
   * @param integer $iYellow
   *
   * @return void
   */
  public function setIYellow(integer $iYellow) {
    $this->iYellow = $iYellow;
  }

  /**
   * Getter for iRed attribute
   *
   * @return integer
   */
  public function getIRed() {
    return $this->iRed;
  }

  /**
   * Setter for iRed attribute
   *
   * @param integer $iRed
   *
   * @return void
   */
  public function setIRed(integer $iRed) {
    $this->iRed = $iRed;
  }

}
