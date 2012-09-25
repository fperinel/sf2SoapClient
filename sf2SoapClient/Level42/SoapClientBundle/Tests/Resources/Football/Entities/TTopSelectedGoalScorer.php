<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TTopSelectedGoalScorer class
 */
class TTopSelectedGoalScorer
{

  /**
   * sName attribute
   * @access public
   * @var string
   */
  public $sName;

  /**
   * iSelected attribute
   * @access public
   * @var integer
   */
  public $iSelected;

  /**
   * Countries attribute
   * @access public
   * @var TCountrySelectedTopScorer[]
   */
  public $Countries;

  /**
   * Getter for sName attribute
   *
   * @return string
   */
  public function getSName() {
    return $this->sName;
  }

  /**
   * Setter for sName attribute
   *
   * @param string $sName
   *
   * @return void
   */
  public function setSName($sName) {
    $this->sName = $sName;
  }

  /**
   * Getter for iSelected attribute
   *
   * @return integer
   */
  public function getISelected() {
    return $this->iSelected;
  }

  /**
   * Setter for iSelected attribute
   *
   * @param integer $iSelected
   *
   * @return void
   */
  public function setISelected(integer $iSelected) {
    $this->iSelected = $iSelected;
  }

  /**
   * Getter for Countries attribute
   *
   * @return TCountrySelectedTopScorer[]
   */
  public function getCountries() {
    return $this->Countries;
  }

  /**
   * Setter for Countries attribute
   *
   * @param TCountrySelectedTopScorer[] $Countries
   *
   * @return void
   */
  public function setCountries($Countries) {
    $this->Countries = $Countries;
  }

}
