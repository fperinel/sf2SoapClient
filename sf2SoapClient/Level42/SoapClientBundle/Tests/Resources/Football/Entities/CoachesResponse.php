<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * CoachesResponse class
 */
class CoachesResponse
{

  /**
   * CoachesResult attribute
   * @access public
   * @var TCoaches[]
   */
  public $CoachesResult;

  /**
   * Getter for CoachesResult attribute
   *
   * @return TCoaches[]
   */
  public function getCoachesResult() {
    return $this->CoachesResult;
  }

  /**
   * Setter for CoachesResult attribute
   *
   * @param TCoaches[] $CoachesResult
   *
   * @return void
   */
  public function setCoachesResult($CoachesResult) {
    $this->CoachesResult = $CoachesResult;
  }

}
