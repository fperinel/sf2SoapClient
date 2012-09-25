<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TStadiumInfo;


/**
 * StadiumInfoResponse class
 */
class StadiumInfoResponse
{

  /**
   * StadiumInfoResult attribute
   * @access public
   * @var TStadiumInfo
   */
  public $StadiumInfoResult;

  /**
   * Getter for StadiumInfoResult attribute
   *
   * @return TStadiumInfo
   */
  public function getStadiumInfoResult() {
    return $this->StadiumInfoResult;
  }

  /**
   * Setter for StadiumInfoResult attribute
   *
   * @param TStadiumInfo $StadiumInfoResult
   *
   * @return void
   */
  public function setStadiumInfoResult(TStadiumInfo $StadiumInfoResult) {
    $this->StadiumInfoResult = $StadiumInfoResult;
  }

}
