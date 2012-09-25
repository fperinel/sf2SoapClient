<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllDefendersResponse class
 */
class AllDefendersResponse
{

  /**
   * AllDefendersResult attribute
   * @access public
   * @var string[]
   */
  public $AllDefendersResult;

  /**
   * Getter for AllDefendersResult attribute
   *
   * @return string[]
   */
  public function getAllDefendersResult() {
    return $this->AllDefendersResult;
  }

  /**
   * Setter for AllDefendersResult attribute
   *
   * @param string[] $AllDefendersResult
   *
   * @return void
   */
  public function setAllDefendersResult($AllDefendersResult) {
    $this->AllDefendersResult = $AllDefendersResult;
  }

}
