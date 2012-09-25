<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GroupsResponse class
 */
class GroupsResponse
{

  /**
   * GroupsResult attribute
   * @access public
   * @var TGroupInfo[]
   */
  public $GroupsResult;

  /**
   * Getter for GroupsResult attribute
   *
   * @return TGroupInfo[]
   */
  public function getGroupsResult() {
    return $this->GroupsResult;
  }

  /**
   * Setter for GroupsResult attribute
   *
   * @param TGroupInfo[] $GroupsResult
   *
   * @return void
   */
  public function setGroupsResult($GroupsResult) {
    $this->GroupsResult = $GroupsResult;
  }

}
