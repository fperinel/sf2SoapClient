<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * PlayedAtWorldCup class
 */
class PlayedAtWorldCup
{

  /**
   * sTeamName attribute
   * @access public
   * @var string
   */
  public $sTeamName;

  /**
   * Getter for sTeamName attribute
   *
   * @return string
   */
  public function getSTeamName() {
    return $this->sTeamName;
  }

  /**
   * Setter for sTeamName attribute
   *
   * @param string $sTeamName
   *
   * @return void
   */
  public function setSTeamName($sTeamName) {
    $this->sTeamName = $sTeamName;
  }

}
