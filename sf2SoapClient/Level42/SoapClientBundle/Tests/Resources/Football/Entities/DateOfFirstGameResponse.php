<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;


/**
 * DateOfFirstGameResponse class
 */
class DateOfFirstGameResponse
{

  /**
   * DateOfFirstGameResult attribute
   * @access public
   * @var Date
   */
  public $DateOfFirstGameResult;

  /**
   * Getter for DateOfFirstGameResult attribute
   *
   * @return Date
   */
  public function getDateOfFirstGameResult() {
    return $this->DateOfFirstGameResult;
  }

  /**
   * Setter for DateOfFirstGameResult attribute
   *
   * @param Date $DateOfFirstGameResult
   *
   * @return void
   */
  public function setDateOfFirstGameResult(Date $DateOfFirstGameResult) {
    $this->DateOfFirstGameResult = $DateOfFirstGameResult;
  }

}
