<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TTournamentInfo;


/**
 * TournamentInfoResponse class
 */
class TournamentInfoResponse
{

  /**
   * TournamentInfoResult attribute
   * @access public
   * @var TTournamentInfo
   */
  public $TournamentInfoResult;

  /**
   * Getter for TournamentInfoResult attribute
   *
   * @return TTournamentInfo
   */
  public function getTournamentInfoResult() {
    return $this->TournamentInfoResult;
  }

  /**
   * Setter for TournamentInfoResult attribute
   *
   * @param TTournamentInfo $TournamentInfoResult
   *
   * @return void
   */
  public function setTournamentInfoResult(TTournamentInfo $TournamentInfoResult) {
    $this->TournamentInfoResult = $TournamentInfoResult;
  }

}
