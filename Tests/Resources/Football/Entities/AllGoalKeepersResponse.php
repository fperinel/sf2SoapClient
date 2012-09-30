<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllGoalKeepersResponse class
 */
class AllGoalKeepersResponse
{

  /**
   * AllGoalKeepersResult attribute
   * @access public
   * @var string[]
   */
  public $AllGoalKeepersResult;

  /**
   * Getter for AllGoalKeepersResult attribute
   *
   * @return string[]
   */
  public function getAllGoalKeepersResult() {
    return $this->AllGoalKeepersResult;
  }

  /**
   * Setter for AllGoalKeepersResult attribute
   *
   * @param string[] $AllGoalKeepersResult
   *
   * @return void
   */
  public function setAllGoalKeepersResult($AllGoalKeepersResult) {
    $this->AllGoalKeepersResult = $AllGoalKeepersResult;
  }

}
