<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ListeDevis;


/**
 * GetDevisResponse class
 */
class GetDevisResponse
{

  /**
   * devis attribute
   * @access public
   * @var ListeDevis
   */
  public $devis;

  /**
   * Getter for devis attribute
   *
   * @return ListeDevis
   */
  public function getDevis() {
    return $this->devis;
  }

  /**
   * Setter for devis attribute
   *
   * @param ListeDevis $devis
   *
   * @return void
   */
  public function setDevis(ListeDevis $devis) {
    $this->devis = $devis;
  }

}
