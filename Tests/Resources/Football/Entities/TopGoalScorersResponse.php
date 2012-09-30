<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * TopGoalScorersResponse class
 */
class TopGoalScorersResponse
{

  /**
   * TopGoalScorersResult attribute
   * @access public
   * @var TTopGoalScorer[]
   */
  public $TopGoalScorersResult;

  /**
   * Getter for TopGoalScorersResult attribute
   *
   * @return TTopGoalScorer[]
   */
  public function getTopGoalScorersResult() {
    return $this->TopGoalScorersResult;
  }

  /**
   * Setter for TopGoalScorersResult attribute
   *
   * @param TTopGoalScorer[] $TopGoalScorersResult
   *
   * @return void
   */
  public function setTopGoalScorersResult($TopGoalScorersResult) {
    $this->TopGoalScorersResult = $TopGoalScorersResult;
  }

}
