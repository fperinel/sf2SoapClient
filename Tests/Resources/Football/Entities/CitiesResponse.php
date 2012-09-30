<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * CitiesResponse class
 */
class CitiesResponse
{

  /**
   * CitiesResult attribute
   * @access public
   * @var string[]
   */
  public $CitiesResult;

  /**
   * Getter for CitiesResult attribute
   *
   * @return string[]
   */
  public function getCitiesResult() {
    return $this->CitiesResult;
  }

  /**
   * Setter for CitiesResult attribute
   *
   * @param string[] $CitiesResult
   *
   * @return void
   */
  public function setCitiesResult($CitiesResult) {
    $this->CitiesResult = $CitiesResult;
  }

}
