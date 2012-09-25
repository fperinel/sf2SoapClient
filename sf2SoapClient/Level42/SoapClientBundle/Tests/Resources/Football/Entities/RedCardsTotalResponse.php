<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * RedCardsTotalResponse class
 */
class RedCardsTotalResponse
{

  /**
   * RedCardsTotalResult attribute
   * @access public
   * @var integer
   */
  public $RedCardsTotalResult;

  /**
   * Getter for RedCardsTotalResult attribute
   *
   * @return integer
   */
  public function getRedCardsTotalResult() {
    return $this->RedCardsTotalResult;
  }

  /**
   * Setter for RedCardsTotalResult attribute
   *
   * @param integer $RedCardsTotalResult
   *
   * @return void
   */
  public function setRedCardsTotalResult(integer $RedCardsTotalResult) {
    $this->RedCardsTotalResult = $RedCardsTotalResult;
  }

}
