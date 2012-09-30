<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * TGameResultCode class
 */
class TGameResultCode
{

  /**
   * sCode attribute
   * @access public
   * @var string
   */
  public $sCode;

  /**
   * sDescription attribute
   * @access public
   * @var string
   */
  public $sDescription;

  /**
   * Getter for sCode attribute
   *
   * @return string
   */
  public function getSCode() {
    return $this->sCode;
  }

  /**
   * Setter for sCode attribute
   *
   * @param string $sCode
   *
   * @return void
   */
  public function setSCode($sCode) {
    $this->sCode = $sCode;
  }

  /**
   * Getter for sDescription attribute
   *
   * @return string
   */
  public function getSDescription() {
    return $this->sDescription;
  }

  /**
   * Setter for sDescription attribute
   *
   * @param string $sDescription
   *
   * @return void
   */
  public function setSDescription($sDescription) {
    $this->sDescription = $sDescription;
  }

}
