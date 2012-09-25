<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GroupCompetitorsResponse class
 */
class GroupCompetitorsResponse
{

  /**
   * GroupCompetitorsResult attribute
   * @access public
   * @var TTeamInfo[]
   */
  public $GroupCompetitorsResult;

  /**
   * Getter for GroupCompetitorsResult attribute
   *
   * @return TTeamInfo[]
   */
  public function getGroupCompetitorsResult() {
    return $this->GroupCompetitorsResult;
  }

  /**
   * Setter for GroupCompetitorsResult attribute
   *
   * @param TTeamInfo[] $GroupCompetitorsResult
   *
   * @return void
   */
  public function setGroupCompetitorsResult($GroupCompetitorsResult) {
    $this->GroupCompetitorsResult = $GroupCompetitorsResult;
  }

}
