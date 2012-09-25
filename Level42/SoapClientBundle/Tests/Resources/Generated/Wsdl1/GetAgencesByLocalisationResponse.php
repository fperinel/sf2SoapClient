<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ListeAgence;


/**
 * GetAgencesByLocalisationResponse class
 */
class GetAgencesByLocalisationResponse
{

  /**
   * agences attribute
   * @access public
   * @var ListeAgence
   */
  public $agences;

  /**
   * Getter for agences attribute
   *
   * @return ListeAgence
   */
  public function getAgences() {
    return $this->agences;
  }

  /**
   * Setter for agences attribute
   *
   * @param ListeAgence $agences
   *
   * @return void
   */
  public function setAgences(ListeAgence $agences) {
    $this->agences = $agences;
  }

}
