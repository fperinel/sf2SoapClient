<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * GroupCompetitors class
 */
class GroupCompetitors
{

  /**
   * sPoule attribute
   * @access public
   * @var string
   */
  public $sPoule;

  /**
   * Getter for sPoule attribute
   *
   * @return string
   */
  public function getSPoule() {
    return $this->sPoule;
  }

  /**
   * Setter for sPoule attribute
   *
   * @param string $sPoule
   *
   * @return void
   */
  public function setSPoule($sPoule) {
    $this->sPoule = $sPoule;
  }

}
