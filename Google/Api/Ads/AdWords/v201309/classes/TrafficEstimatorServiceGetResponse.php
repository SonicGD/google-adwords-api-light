<?php



/**
 * 
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TrafficEstimatorServiceGetResponse {
  /**
   * @access public
   * @var TrafficEstimatorResult
   */
  public $rval;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/o/v201309";
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