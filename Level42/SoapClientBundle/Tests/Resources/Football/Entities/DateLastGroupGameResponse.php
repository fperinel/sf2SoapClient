<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;


/**
 * DateLastGroupGameResponse class
 */
class DateLastGroupGameResponse
{

  /**
   * DateLastGroupGameResult attribute
   * @access public
   * @var Date
   */
  public $DateLastGroupGameResult;

  /**
   * Getter for DateLastGroupGameResult attribute
   *
   * @return Date
   */
  public function getDateLastGroupGameResult() {
    return $this->DateLastGroupGameResult;
  }

  /**
   * Setter for DateLastGroupGameResult attribute
   *
   * @param Date $DateLastGroupGameResult
   *
   * @return void
   */
  public function setDateLastGroupGameResult(Date $DateLastGroupGameResult) {
    $this->DateLastGroupGameResult = $DateLastGroupGameResult;
  }

}
