<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Client;


/**
 * ModifierClient class
 */
class ModifierClient
{

  /**
   * email attribute
   * @access public
   * @var string
   */
  public $email;

  /**
   * password attribute
   * @access public
   * @var string
   */
  public $password;

  /**
   * client attribute
   * @access public
   * @var Client
   */
  public $client;

  /**
   * Getter for email attribute
   *
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * Setter for email attribute
   *
   * @param string $email
   *
   * @return void
   */
  public function setEmail($email) {
    $this->email = $email;
  }

  /**
   * Getter for password attribute
   *
   * @return string
   */
  public function getPassword() {
    return $this->password;
  }

  /**
   * Setter for password attribute
   *
   * @param string $password
   *
   * @return void
   */
  public function setPassword($password) {
    $this->password = $password;
  }

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
