<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\double;


/**
 * Taxe class
 */
class Taxe
{

  /**
   * tauxTVA attribute
   * @access public
   * @var double
   */
  public $tauxTVA;

  /**
   * montantTVA attribute
   * @access public
   * @var double
   */
  public $montantTVA;

  /**
   * Getter for tauxTVA attribute
   *
   * @return double
   */
  public function getTauxTVA() {
    return $this->tauxTVA;
  }

  /**
   * Setter for tauxTVA attribute
   *
   * @param double $tauxTVA
   *
   * @return void
   */
  public function setTauxTVA(double $tauxTVA) {
    $this->tauxTVA = $tauxTVA;
  }

  /**
   * Getter for montantTVA attribute
   *
   * @return double
   */
  public function getMontantTVA() {
    return $this->montantTVA;
  }

  /**
   * Setter for montantTVA attribute
   *
   * @param double $montantTVA
   *
   * @return void
   */
  public function setMontantTVA(double $montantTVA) {
    $this->montantTVA = $montantTVA;
  }

}
