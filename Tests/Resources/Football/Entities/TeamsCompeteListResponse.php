<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * TeamsCompeteListResponse class
 */
class TeamsCompeteListResponse
{

  /**
   * TeamsCompeteListResult attribute
   * @access public
   * @var TTeamCompete[]
   */
  public $TeamsCompeteListResult;

  /**
   * Getter for TeamsCompeteListResult attribute
   *
   * @return TTeamCompete[]
   */
  public function getTeamsCompeteListResult() {
    return $this->TeamsCompeteListResult;
  }

  /**
   * Setter for TeamsCompeteListResult attribute
   *
   * @param TTeamCompete[] $TeamsCompeteListResult
   *
   * @return void
   */
  public function setTeamsCompeteListResult($TeamsCompeteListResult) {
    $this->TeamsCompeteListResult = $TeamsCompeteListResult;
  }

}
