<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * AllCardsResponse class
 */
class AllCardsResponse
{

  /**
   * AllCardsResult attribute
   * @access public
   * @var TCardInfo[]
   */
  public $AllCardsResult;

  /**
   * Getter for AllCardsResult attribute
   *
   * @return TCardInfo[]
   */
  public function getAllCardsResult() {
    return $this->AllCardsResult;
  }

  /**
   * Setter for AllCardsResult attribute
   *
   * @param TCardInfo[] $AllCardsResult
   *
   * @return void
   */
  public function setAllCardsResult($AllCardsResult) {
    $this->AllCardsResult = $AllCardsResult;
  }

}
