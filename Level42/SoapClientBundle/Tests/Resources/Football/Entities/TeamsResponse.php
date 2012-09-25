<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * TeamsResponse class
 */
class TeamsResponse
{

  /**
   * TeamsResult attribute
   * @access public
   * @var TTeamInfo[]
   */
  public $TeamsResult;

  /**
   * Getter for TeamsResult attribute
   *
   * @return TTeamInfo[]
   */
  public function getTeamsResult() {
    return $this->TeamsResult;
  }

  /**
   * Setter for TeamsResult attribute
   *
   * @param TTeamInfo[] $TeamsResult
   *
   * @return void
   */
  public function setTeamsResult($TeamsResult) {
    $this->TeamsResult = $TeamsResult;
  }

}
