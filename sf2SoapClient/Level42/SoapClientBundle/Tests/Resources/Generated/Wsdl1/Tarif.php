<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\double;


/**
 * Tarif class
 */
class Tarif
{

  /**
   * tarifNet attribute
   * @access public
   * @var double
   */
  public $tarifNet;

  /**
   * libelle attribute
   * @access public
   * @var string
   */
  public $libelle;

  /**
   * Getter for tarifNet attribute
   *
   * @return double
   */
  public function getTarifNet() {
    return $this->tarifNet;
  }

  /**
   * Setter for tarifNet attribute
   *
   * @param double $tarifNet
   *
   * @return void
   */
  public function setTarifNet(double $tarifNet) {
    $this->tarifNet = $tarifNet;
  }

  /**
   * Getter for libelle attribute
   *
   * @return string
   */
  public function getLibelle() {
    return $this->libelle;
  }

  /**
   * Setter for libelle attribute
   *
   * @param string $libelle
   *
   * @return void
   */
  public function setLibelle($libelle) {
    $this->libelle = $libelle;
  }

}
