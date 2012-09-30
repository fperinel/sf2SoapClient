<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GoalsScoredResponse class
 */
class GoalsScoredResponse
{

  /**
   * GoalsScoredResult attribute
   * @access public
   * @var TGoal[]
   */
  public $GoalsScoredResult;

  /**
   * Getter for GoalsScoredResult attribute
   *
   * @return TGoal[]
   */
  public function getGoalsScoredResult() {
    return $this->GoalsScoredResult;
  }

  /**
   * Setter for GoalsScoredResult attribute
   *
   * @param TGoal[] $GoalsScoredResult
   *
   * @return void
   */
  public function setGoalsScoredResult($GoalsScoredResult) {
    $this->GoalsScoredResult = $GoalsScoredResult;
  }

}
