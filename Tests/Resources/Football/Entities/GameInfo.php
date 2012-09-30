<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * GameInfo class
 */
class GameInfo
{

  /**
   * iGameId attribute
   * @access public
   * @var integer
   */
  public $iGameId;

  /**
   * Getter for iGameId attribute
   *
   * @return integer
   */
  public function getIGameId() {
    return $this->iGameId;
  }

  /**
   * Setter for iGameId attribute
   *
   * @param integer $iGameId
   *
   * @return void
   */
  public function setIGameId(integer $iGameId) {
    $this->iGameId = $iGameId;
  }

}
