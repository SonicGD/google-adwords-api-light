<?php

namespace Google\Api\Ads\AdWords\v201306\classes;



/**
 * Network settings for a Campaign.
 * 
 * 
 * 
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NetworkSetting {
  /**
   * @access public
   * @var boolean
   */
  public $targetGoogleSearch;

  /**
   * @access public
   * @var boolean
   */
  public $targetSearchNetwork;

  /**
   * @access public
   * @var boolean
   */
  public $targetContentNetwork;

  /**
   * @access public
   * @var boolean
   */
  public $targetPartnerSearchNetwork;

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
    return "NetworkSetting";
  }

  public function __construct($targetGoogleSearch = NULL, $targetSearchNetwork = NULL, $targetContentNetwork = NULL, $targetPartnerSearchNetwork = NULL) {
    $this->targetGoogleSearch = $targetGoogleSearch;
    $this->targetSearchNetwork = $targetSearchNetwork;
    $this->targetContentNetwork = $targetContentNetwork;
    $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
  }}