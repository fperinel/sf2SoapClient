<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\integer;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Panier;


/**
 * ListePanier class
 */
class ListePanier
{

  /**
   * controleEncours attribute
   * @access public
   * @var boolean
   */
  public $controleEncours;

  /**
   * nbArticle1 attribute
   * @access public
   * @var integer
   */
  public $nbArticle1;

  /**
   * nbArticle2 attribute
   * @access public
   * @var integer
   */
  public $nbArticle2;

  /**
   * panier1 attribute
   * @access public
   * @var Panier
   */
  public $panier1;

  /**
   * panier2 attribute
   * @access public
   * @var Panier
   */
  public $panier2;

  /**
   * Getter for controleEncours attribute
   *
   * @return boolean
   */
  public function getControleEncours() {
    return $this->controleEncours;
  }

  /**
   * Setter for controleEncours attribute
   *
   * @param boolean $controleEncours
   *
   * @return void
   */
  public function setControleEncours($controleEncours) {
    $this->controleEncours = $controleEncours;
  }

  /**
   * Getter for nbArticle1 attribute
   *
   * @return integer
   */
  public function getNbArticle1() {
    return $this->nbArticle1;
  }

  /**
   * Setter for nbArticle1 attribute
   *
   * @param integer $nbArticle1
   *
   * @return void
   */
  public function setNbArticle1(integer $nbArticle1) {
    $this->nbArticle1 = $nbArticle1;
  }

  /**
   * Getter for nbArticle2 attribute
   *
   * @return integer
   */
  public function getNbArticle2() {
    return $this->nbArticle2;
  }

  /**
   * Setter for nbArticle2 attribute
   *
   * @param integer $nbArticle2
   *
   * @return void
   */
  public function setNbArticle2(integer $nbArticle2) {
    $this->nbArticle2 = $nbArticle2;
  }

  /**
   * Getter for panier1 attribute
   *
   * @return Panier
   */
  public function getPanier1() {
    return $this->panier1;
  }

  /**
   * Setter for panier1 attribute
   *
   * @param Panier $panier1
   *
   * @return void
   */
  public function setPanier1(Panier $panier1) {
    $this->panier1 = $panier1;
  }

  /**
   * Getter for panier2 attribute
   *
   * @return Panier
   */
  public function getPanier2() {
    return $this->panier2;
  }

  /**
   * Setter for panier2 attribute
   *
   * @param Panier $panier2
   *
   * @return void
   */
  public function setPanier2(Panier $panier2) {
    $this->panier2 = $panier2;
  }

}
