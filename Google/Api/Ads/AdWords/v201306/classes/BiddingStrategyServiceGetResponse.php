<?php

namespace Google\Api\Ads\AdWords\v201306\classes;



/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddingStrategyServiceGetResponse {
  /**
   * @access public
   * @var BiddingStrategyPage
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/cm/v201306";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "";
  }

  public function __construct($rval = NULL) {
    $this->rval = $rval;
  }}