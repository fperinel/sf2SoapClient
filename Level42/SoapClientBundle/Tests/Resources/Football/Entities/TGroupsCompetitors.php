<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TGroupInfo;


/**
 * TGroupsCompetitors class
 */
class TGroupsCompetitors
{

  /**
   * GroupInfo attribute
   * @access public
   * @var TGroupInfo
   */
  public $GroupInfo;

  /**
   * TeamsInGroup attribute
   * @access public
   * @var TTeamInfo[]
   */
  public $TeamsInGroup;

  /**
   * Getter for GroupInfo attribute
   *
   * @return TGroupInfo
   */
  public function getGroupInfo() {
    return $this->GroupInfo;
  }

  /**
   * Setter for GroupInfo attribute
   *
   * @param TGroupInfo $GroupInfo
   *
   * @return void
   */
  public function setGroupInfo(TGroupInfo $GroupInfo) {
    $this->GroupInfo = $GroupInfo;
  }

  /**
   * Getter for TeamsInGroup attribute
   *
   * @return TTeamInfo[]
   */
  public function getTeamsInGroup() {
    return $this->TeamsInGroup;
  }

  /**
   * Setter for TeamsInGroup attribute
   *
   * @param TTeamInfo[] $TeamsInGroup
   *
   * @return void
   */
  public function setTeamsInGroup($TeamsInGroup) {
    $this->TeamsInGroup = $TeamsInGroup;
  }

}
