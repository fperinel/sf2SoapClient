<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * YellowCardsTotalResponse class
 */
class YellowCardsTotalResponse
{

  /**
   * YellowCardsTotalResult attribute
   * @access public
   * @var integer
   */
  public $YellowCardsTotalResult;

  /**
   * Getter for YellowCardsTotalResult attribute
   *
   * @return integer
   */
  public function getYellowCardsTotalResult() {
    return $this->YellowCardsTotalResult;
  }

  /**
   * Setter for YellowCardsTotalResult attribute
   *
   * @param integer $YellowCardsTotalResult
   *
   * @return void
   */
  public function setYellowCardsTotalResult(integer $YellowCardsTotalResult) {
    $this->YellowCardsTotalResult = $YellowCardsTotalResult;
  }

}
