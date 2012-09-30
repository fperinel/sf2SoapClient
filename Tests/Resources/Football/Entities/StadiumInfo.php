<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * StadiumInfo class
 */
class StadiumInfo
{

  /**
   * sStadiumName attribute
   * @access public
   * @var string
   */
  public $sStadiumName;

  /**
   * Getter for sStadiumName attribute
   *
   * @return string
   */
  public function getSStadiumName() {
    return $this->sStadiumName;
  }

  /**
   * Setter for sStadiumName attribute
   *
   * @param string $sStadiumName
   *
   * @return void
   */
  public function setSStadiumName($sStadiumName) {
    $this->sStadiumName = $sStadiumName;
  }

}
