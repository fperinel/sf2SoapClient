<?php
namespace Level42\SoapClientBundle\Tests\Resources\Countries\Entities;

use Level42\SoapClientBundle\Tests\Resources\Countries\Entities\integer;


/**
 * NumberOfRequestData class
 */
class NumberOfRequestData
{

  /**
   * requestleft attribute
   * @access public
   * @var integer
   */
  public $requestleft;

  /**
   * Getter for requestleft attribute
   *
   * @return integer
   */
  public function getRequestleft() {
    return $this->requestleft;
  }

  /**
   * Setter for requestleft attribute
   *
   * @param integer $requestleft
   *
   * @return void
   */
  public function setRequestleft(integer $requestleft) {
    $this->requestleft = $requestleft;
  }

}
