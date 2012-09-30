<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllMidFieldsResponse class
 */
class AllMidFieldsResponse
{

  /**
   * AllMidFieldsResult attribute
   * @access public
   * @var string[]
   */
  public $AllMidFieldsResult;

  /**
   * Getter for AllMidFieldsResult attribute
   *
   * @return string[]
   */
  public function getAllMidFieldsResult() {
    return $this->AllMidFieldsResult;
  }

  /**
   * Setter for AllMidFieldsResult attribute
   *
   * @param string[] $AllMidFieldsResult
   *
   * @return void
   */
  public function setAllMidFieldsResult($AllMidFieldsResult) {
    $this->AllMidFieldsResult = $AllMidFieldsResult;
  }

}
