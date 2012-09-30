<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllPlayerNames class
 */
class AllPlayerNames
{

  /**
   * bSelected attribute
   * @access public
   * @var boolean
   */
  public $bSelected;

  /**
   * Getter for bSelected attribute
   *
   * @return boolean
   */
  public function getBSelected() {
    return $this->bSelected;
  }

  /**
   * Setter for bSelected attribute
   *
   * @param boolean $bSelected
   *
   * @return void
   */
  public function setBSelected($bSelected) {
    $this->bSelected = $bSelected;
  }

}
