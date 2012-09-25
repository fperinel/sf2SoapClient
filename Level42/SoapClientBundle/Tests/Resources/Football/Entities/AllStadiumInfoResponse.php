<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllStadiumInfoResponse class
 */
class AllStadiumInfoResponse
{

  /**
   * AllStadiumInfoResult attribute
   * @access public
   * @var TStadiumInfo[]
   */
  public $AllStadiumInfoResult;

  /**
   * Getter for AllStadiumInfoResult attribute
   *
   * @return TStadiumInfo[]
   */
  public function getAllStadiumInfoResult() {
    return $this->AllStadiumInfoResult;
  }

  /**
   * Setter for AllStadiumInfoResult attribute
   *
   * @param TStadiumInfo[] $AllStadiumInfoResult
   *
   * @return void
   */
  public function setAllStadiumInfoResult($AllStadiumInfoResult) {
    $this->AllStadiumInfoResult = $AllStadiumInfoResult;
  }

}
