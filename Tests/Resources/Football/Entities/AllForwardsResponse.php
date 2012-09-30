<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllForwardsResponse class
 */
class AllForwardsResponse
{

  /**
   * AllForwardsResult attribute
   * @access public
   * @var string[]
   */
  public $AllForwardsResult;

  /**
   * Getter for AllForwardsResult attribute
   *
   * @return string[]
   */
  public function getAllForwardsResult() {
    return $this->AllForwardsResult;
  }

  /**
   * Setter for AllForwardsResult attribute
   *
   * @param string[] $AllForwardsResult
   *
   * @return void
   */
  public function setAllForwardsResult($AllForwardsResult) {
    $this->AllForwardsResult = $AllForwardsResult;
  }

}
