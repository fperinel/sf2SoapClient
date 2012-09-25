<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ListeAdresse;


/**
 * GetAdressesFacturationResponse class
 */
class GetAdressesFacturationResponse
{

  /**
   * adresses attribute
   * @access public
   * @var ListeAdresse
   */
  public $adresses;

  /**
   * Getter for adresses attribute
   *
   * @return ListeAdresse
   */
  public function getAdresses() {
    return $this->adresses;
  }

  /**
   * Setter for adresses attribute
   *
   * @param ListeAdresse $adresses
   *
   * @return void
   */
  public function setAdresses(ListeAdresse $adresses) {
    $this->adresses = $adresses;
  }

}
