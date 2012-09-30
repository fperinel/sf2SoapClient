<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * TopSelectedGoalScorersResponse class
 */
class TopSelectedGoalScorersResponse
{

  /**
   * TopSelectedGoalScorersResult attribute
   * @access public
   * @var TTopSelectedGoalScorer[]
   */
  public $TopSelectedGoalScorersResult;

  /**
   * Getter for TopSelectedGoalScorersResult attribute
   *
   * @return TTopSelectedGoalScorer[]
   */
  public function getTopSelectedGoalScorersResult() {
    return $this->TopSelectedGoalScorersResult;
  }

  /**
   * Setter for TopSelectedGoalScorersResult attribute
   *
   * @param TTopSelectedGoalScorer[] $TopSelectedGoalScorersResult
   *
   * @return void
   */
  public function setTopSelectedGoalScorersResult($TopSelectedGoalScorersResult) {
    $this->TopSelectedGoalScorersResult = $TopSelectedGoalScorersResult;
  }

}
