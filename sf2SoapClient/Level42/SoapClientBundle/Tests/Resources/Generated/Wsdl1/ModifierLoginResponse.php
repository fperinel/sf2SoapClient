<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Client;


/**
 * ModifierLoginResponse class
 */
class ModifierLoginResponse
{

  /**
   * client attribute
   * @access public
   * @var Client
   */
  public $client;

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

}
