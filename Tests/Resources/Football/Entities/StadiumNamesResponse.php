<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * StadiumNamesResponse class
 */
class StadiumNamesResponse
{

  /**
   * StadiumNamesResult attribute
   * @access public
   * @var string[]
   */
  public $StadiumNamesResult;

  /**
   * Getter for StadiumNamesResult attribute
   *
   * @return string[]
   */
  public function getStadiumNamesResult() {
    return $this->StadiumNamesResult;
  }

  /**
   * Setter for StadiumNamesResult attribute
   *
   * @param string[] $StadiumNamesResult
   *
   * @return void
   */
  public function setStadiumNamesResult($StadiumNamesResult) {
    $this->StadiumNamesResult = $StadiumNamesResult;
  }

}
