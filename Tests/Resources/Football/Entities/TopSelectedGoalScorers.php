<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TopSelectedGoalScorers class
 */
class TopSelectedGoalScorers
{

  /**
   * iTopN attribute
   * @access public
   * @var integer
   */
  public $iTopN;

  /**
   * Getter for iTopN attribute
   *
   * @return integer
   */
  public function getITopN() {
    return $this->iTopN;
  }

  /**
   * Setter for iTopN attribute
   *
   * @param integer $iTopN
   *
   * @return void
   */
  public function setITopN(integer $iTopN) {
    $this->iTopN = $iTopN;
  }

}
