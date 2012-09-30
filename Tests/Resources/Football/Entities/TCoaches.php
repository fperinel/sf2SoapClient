<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\TTeamInfo;


/**
 * TCoaches class
 */
class TCoaches
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

  /**
   * TeamInfo attribute
   * @access public
   * @var TTeamInfo
   */
  public $TeamInfo;

  /**
   * Getter for sName attribute
   *
   * @return string
   */
  public function getSName() {
    return $this->sName;
  }

  /**
   * Setter for sName attribute
   *
   * @param string $sName
   *
   * @return void
   */
  public function setSName($sName) {
    $this->sName = $sName;
  }

  /**
   * Getter for TeamInfo attribute
   *
   * @return TTeamInfo
   */
  public function getTeamInfo() {
    return $this->TeamInfo;
  }

  /**
   * Setter for TeamInfo attribute
   *
   * @param TTeamInfo $TeamInfo
   *
   * @return void
   */
  public function setTeamInfo(TTeamInfo $TeamInfo) {
    $this->TeamInfo = $TeamInfo;
  }

}
