<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;

use Level42\SoapClientBundle\Tests\Resources\Football\Entities\Date;
use Level42\SoapClientBundle\Tests\Resources\Football\Entities\integer;


/**
 * TTournamentInfo class
 */
class TTournamentInfo
{

  /**
   * dFirstGame attribute
   * @access public
   * @var Date
   */
  public $dFirstGame;

  /**
   * dLastGame attribute
   * @access public
   * @var Date
   */
  public $dLastGame;

  /**
   * dLastGroupDateGame attribute
   * @access public
   * @var Date
   */
  public $dLastGroupDateGame;

  /**
   * iGames attribute
   * @access public
   * @var integer
   */
  public $iGames;

  /**
   * Getter for dFirstGame attribute
   *
   * @return Date
   */
  public function getDFirstGame() {
    return $this->dFirstGame;
  }

  /**
   * Setter for dFirstGame attribute
   *
   * @param Date $dFirstGame
   *
   * @return void
   */
  public function setDFirstGame(Date $dFirstGame) {
    $this->dFirstGame = $dFirstGame;
  }

  /**
   * Getter for dLastGame attribute
   *
   * @return Date
   */
  public function getDLastGame() {
    return $this->dLastGame;
  }

  /**
   * Setter for dLastGame attribute
   *
   * @param Date $dLastGame
   *
   * @return void
   */
  public function setDLastGame(Date $dLastGame) {
    $this->dLastGame = $dLastGame;
  }

  /**
   * Getter for dLastGroupDateGame attribute
   *
   * @return Date
   */
  public function getDLastGroupDateGame() {
    return $this->dLastGroupDateGame;
  }

  /**
   * Setter for dLastGroupDateGame attribute
   *
   * @param Date $dLastGroupDateGame
   *
   * @return void
   */
  public function setDLastGroupDateGame(Date $dLastGroupDateGame) {
    $this->dLastGroupDateGame = $dLastGroupDateGame;
  }

  /**
   * Getter for iGames attribute
   *
   * @return integer
   */
  public function getIGames() {
    return $this->iGames;
  }

  /**
   * Setter for iGames attribute
   *
   * @param integer $iGames
   *
   * @return void
   */
  public function setIGames(integer $iGames) {
    $this->iGames = $iGames;
  }

}
