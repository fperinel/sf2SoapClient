<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * StadiumURLResponse class
 */
class StadiumURLResponse
{

  /**
   * StadiumURLResult attribute
   * @access public
   * @var string
   */
  public $StadiumURLResult;

  /**
   * Getter for StadiumURLResult attribute
   *
   * @return string
   */
  public function getStadiumURLResult() {
    return $this->StadiumURLResult;
  }

  /**
   * Setter for StadiumURLResult attribute
   *
   * @param string $StadiumURLResult
   *
   * @return void
   */
  public function setStadiumURLResult($StadiumURLResult) {
    $this->StadiumURLResult = $StadiumURLResult;
  }

}
