<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\double;


/**
 * InfoProduitRequest class
 */
class InfoProduitRequest
{

  /**
   * codeArticle attribute
   * @access public
   * @var string
   */
  public $codeArticle;

  /**
   * quantite attribute
   * @access public
   * @var double
   */
  public $quantite;

  /**
   * dateStock attribute
   * @access public
   * @var string
   */
  public $dateStock;

  /**
   * Getter for codeArticle attribute
   *
   * @return string
   */
  public function getCodeArticle() {
    return $this->codeArticle;
  }

  /**
   * Setter for codeArticle attribute
   *
   * @param string $codeArticle
   *
   * @return void
   */
  public function setCodeArticle($codeArticle) {
    $this->codeArticle = $codeArticle;
  }

  /**
   * Getter for quantite attribute
   *
   * @return double
   */
  public function getQuantite() {
    return $this->quantite;
  }

  /**
   * Setter for quantite attribute
   *
   * @param double $quantite
   *
   * @return void
   */
  public function setQuantite(double $quantite) {
    $this->quantite = $quantite;
  }

  /**
   * Getter for dateStock attribute
   *
   * @return string
   */
  public function getDateStock() {
    return $this->dateStock;
  }

  /**
   * Setter for dateStock attribute
   *
   * @param string $dateStock
   *
   * @return void
   */
  public function setDateStock($dateStock) {
    $this->dateStock = $dateStock;
  }

}
