<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;


/**
 * DateOfLastGameResponse class
 */
class DateOfLastGameResponse
{

  /**
   * DateOfLastGameResult attribute
   * @access public
   * @var Date
   */
  public $DateOfLastGameResult;

  /**
   * Getter for DateOfLastGameResult attribute
   *
   * @return Date
   */
  public function getDateOfLastGameResult() {
    return $this->DateOfLastGameResult;
  }

  /**
   * Setter for DateOfLastGameResult attribute
   *
   * @param Date $DateOfLastGameResult
   *
   * @return void
   */
  public function setDateOfLastGameResult(Date $DateOfLastGameResult) {
    $this->DateOfLastGameResult = $DateOfLastGameResult;
  }

}
