<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllGroupCompetitorsResponse class
 */
class AllGroupCompetitorsResponse
{

  /**
   * AllGroupCompetitorsResult attribute
   * @access public
   * @var TGroupsCompetitors[]
   */
  public $AllGroupCompetitorsResult;

  /**
   * Getter for AllGroupCompetitorsResult attribute
   *
   * @return TGroupsCompetitors[]
   */
  public function getAllGroupCompetitorsResult() {
    return $this->AllGroupCompetitorsResult;
  }

  /**
   * Setter for AllGroupCompetitorsResult attribute
   *
   * @param TGroupsCompetitors[] $AllGroupCompetitorsResult
   *
   * @return void
   */
  public function setAllGroupCompetitorsResult($AllGroupCompetitorsResult) {
    $this->AllGroupCompetitorsResult = $AllGroupCompetitorsResult;
  }

}
