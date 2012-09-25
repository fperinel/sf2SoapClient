<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * GroupCountResponse class
 */
class GroupCountResponse
{

  /**
   * GroupCountResult attribute
   * @access public
   * @var integer
   */
  public $GroupCountResult;

  /**
   * Getter for GroupCountResult attribute
   *
   * @return integer
   */
  public function getGroupCountResult() {
    return $this->GroupCountResult;
  }

  /**
   * Setter for GroupCountResult attribute
   *
   * @param integer $GroupCountResult
   *
   * @return void
   */
  public function setGroupCountResult(integer $GroupCountResult) {
    $this->GroupCountResult = $GroupCountResult;
  }

}
