<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;



/**
 * ListeTarifStock class
 */
class ListeTarifStock
{

  /**
   * tarif attribute
   * @access public
   * @var TarifStock[]
   */
  public $tarif;

  /**
   * Getter for tarif attribute
   *
   * @return TarifStock[]
   */
  public function getTarif() {
    return $this->tarif;
  }

  /**
   * Setter for tarif attribute
   *
   * @param TarifStock[] $tarif
   *
   * @return void
   */
  public function setTarif($tarif) {
    $this->tarif = $tarif;
  }

}
