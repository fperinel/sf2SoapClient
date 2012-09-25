<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * CountryNames class
 */
class CountryNames
{

  /**
   * bWithCompetitors attribute
   * @access public
   * @var boolean
   */
  public $bWithCompetitors;

  /**
   * Getter for bWithCompetitors attribute
   *
   * @return boolean
   */
  public function getBWithCompetitors() {
    return $this->bWithCompetitors;
  }

  /**
   * Setter for bWithCompetitors attribute
   *
   * @param boolean $bWithCompetitors
   *
   * @return void
   */
  public function setBWithCompetitors($bWithCompetitors) {
    $this->bWithCompetitors = $bWithCompetitors;
  }

}
