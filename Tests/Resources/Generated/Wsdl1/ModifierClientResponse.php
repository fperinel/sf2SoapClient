<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ListeClient;


/**
 * ModifierClientResponse class
 */
class ModifierClientResponse
{

  /**
   * client attribute
   * @access public
   * @var ListeClient
   */
  public $client;

  /**
   * Getter for client attribute
   *
   * @return ListeClient
   */
  public function getClient() {
    return $this->client;
  }

  /**
   * Setter for client attribute
   *
   * @param ListeClient $client
   *
   * @return void
   */
  public function setClient(ListeClient $client) {
    $this->client = $client;
  }

}
