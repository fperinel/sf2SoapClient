<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ListeClient;


/**
 * GetClientsResponse class
 */
class GetClientsResponse
{

  /**
   * return attribute
   * @access public
   * @var ListeClient
   */
  public $return;

  /**
   * Getter for return attribute
   *
   * @return ListeClient
   */
  public function getReturn() {
    return $this->return;
  }

  /**
   * Setter for return attribute
   *
   * @param ListeClient $return
   *
   * @return void
   */
  public function setReturn(ListeClient $return) {
    $this->return = $return;
  }

}
