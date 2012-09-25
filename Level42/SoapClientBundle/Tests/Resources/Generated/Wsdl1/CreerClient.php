<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Client;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Adresse;


/**
 * CreerClient class
 */
class CreerClient
{

  /**
   * client attribute
   * @access public
   * @var Client
   */
  public $client;

  /**
   * adresse attribute
   * @access public
   * @var Adresse
   */
  public $adresse;

  /**
   * Getter for client attribute
   *
   * @return Client
   */
  public function getClient() {
    return $this->client;
  }

  /**
   * Setter for client attribute
   *
   * @param Client $client
   *
   * @return void
   */
  public function setClient(Client $client) {
    $this->client = $client;
  }

  /**
   * Getter for adresse attribute
   *
   * @return Adresse
   */
  public function getAdresse() {
    return $this->adresse;
  }

  /**
   * Setter for adresse attribute
   *
   * @param Adresse $adresse
   *
   * @return void
   */
  public function setAdresse(Adresse $adresse) {
    $this->adresse = $adresse;
  }

}
