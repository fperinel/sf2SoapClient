<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\integer;


/**
 * ListeAgenceDepot class
 */
class ListeAgenceDepot
{

  /**
   * agenceDepot attribute
   * @access public
   * @var AgenceDepot[]
   */
  public $agenceDepot;

  /**
   * nbDepots attribute
   * @access public
   * @var integer
   */
  public $nbDepots;

  /**
   * Getter for agenceDepot attribute
   *
   * @return AgenceDepot[]
   */
  public function getAgenceDepot() {
    return $this->agenceDepot;
  }

  /**
   * Setter for agenceDepot attribute
   *
   * @param AgenceDepot[] $agenceDepot
   *
   * @return void
   */
  public function setAgenceDepot($agenceDepot) {
    $this->agenceDepot = $agenceDepot;
  }

  /**
   * Getter for nbDepots attribute
   *
   * @return integer
   */
  public function getNbDepots() {
    return $this->nbDepots;
  }

  /**
   * Setter for nbDepots attribute
   *
   * @param integer $nbDepots
   *
   * @return void
   */
  public function setNbDepots(integer $nbDepots) {
    $this->nbDepots = $nbDepots;
  }

}
