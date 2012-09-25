<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TCards;


/**
 * YellowAndRedCardsTotalResponse class
 */
class YellowAndRedCardsTotalResponse
{

  /**
   * YellowAndRedCardsTotalResult attribute
   * @access public
   * @var TCards
   */
  public $YellowAndRedCardsTotalResult;

  /**
   * Getter for YellowAndRedCardsTotalResult attribute
   *
   * @return TCards
   */
  public function getYellowAndRedCardsTotalResult() {
    return $this->YellowAndRedCardsTotalResult;
  }

  /**
   * Setter for YellowAndRedCardsTotalResult attribute
   *
   * @param TCards $YellowAndRedCardsTotalResult
   *
   * @return void
   */
  public function setYellowAndRedCardsTotalResult(TCards $YellowAndRedCardsTotalResult) {
    $this->YellowAndRedCardsTotalResult = $YellowAndRedCardsTotalResult;
  }

}
