<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TFullTeamInfo;


/**
 * FullTeamInfoResponse class
 */
class FullTeamInfoResponse
{

  /**
   * FullTeamInfoResult attribute
   * @access public
   * @var TFullTeamInfo
   */
  public $FullTeamInfoResult;

  /**
   * Getter for FullTeamInfoResult attribute
   *
   * @return TFullTeamInfo
   */
  public function getFullTeamInfoResult() {
    return $this->FullTeamInfoResult;
  }

  /**
   * Setter for FullTeamInfoResult attribute
   *
   * @param TFullTeamInfo $FullTeamInfoResult
   *
   * @return void
   */
  public function setFullTeamInfoResult(TFullTeamInfo $FullTeamInfoResult) {
    $this->FullTeamInfoResult = $FullTeamInfoResult;
  }

}
