<?php
namespace Level42\SoapClientBundle\Tests\Resources\Football\Entities;



/**
 * SignupsPerDateResponse class
 */
class SignupsPerDateResponse
{

  /**
   * SignupsPerDateResult attribute
   * @access public
   * @var TSignupCount[]
   */
  public $SignupsPerDateResult;

  /**
   * Getter for SignupsPerDateResult attribute
   *
   * @return TSignupCount[]
   */
  public function getSignupsPerDateResult() {
    return $this->SignupsPerDateResult;
  }

  /**
   * Setter for SignupsPerDateResult attribute
   *
   * @param TSignupCount[] $SignupsPerDateResult
   *
   * @return void
   */
  public function setSignupsPerDateResult($SignupsPerDateResult) {
    $this->SignupsPerDateResult = $SignupsPerDateResult;
  }

}
