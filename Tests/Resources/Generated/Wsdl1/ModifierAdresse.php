<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Adresse;


/**
 * ModifierAdresse class
 */
class ModifierAdresse
{

  /**
   * codeSociete attribute
   * @access public
   * @var string
   */
  public $codeSociete;

  /**
   * codeClient attribute
   * @access public
   * @var string
   */
  public $codeClient;

  /**
   * adresse attribute
   * @access public
   * @var Adresse
   */
  public $adresse;

  /**
   * Getter for codeSociete attribute
   *
   * @return string
   */
  public function getCodeSociete() {
    return $this->codeSociete;
  }

  /**
   * Setter for codeSociete attribute
   *
   * @param string $codeSociete
   *
   * @return void
   */
  public function setCodeSociete($codeSociete) {
    $this->codeSociete = $codeSociete;
  }

  /**
   * Getter for codeClient attribute
   *
   * @return string
   */
  public function getCodeClient() {
    return $this->codeClient;
  }

  /**
   * Setter for codeClient attribute
   *
   * @param string $codeClient
   *
   * @return void
   */
  public function setCodeClient($codeClient) {
    $this->codeClient = $codeClient;
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
