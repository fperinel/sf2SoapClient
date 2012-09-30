<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayerNamesResponse class
 */
class AllPlayerNamesResponse
{

  /**
   * AllPlayerNamesResult attribute
   * @access public
   * @var TPlayerNames[]
   */
  public $AllPlayerNamesResult;

  /**
   * Getter for AllPlayerNamesResult attribute
   *
   * @return TPlayerNames[]
   */
  public function getAllPlayerNamesResult() {
    return $this->AllPlayerNamesResult;
  }

  /**
   * Setter for AllPlayerNamesResult attribute
   *
   * @param TPlayerNames[] $AllPlayerNamesResult
   *
   * @return void
   */
  public function setAllPlayerNamesResult($AllPlayerNamesResult) {
    $this->AllPlayerNamesResult = $AllPlayerNamesResult;
  }

}
