<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * StadiumURL class
 */
class StadiumURL
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
