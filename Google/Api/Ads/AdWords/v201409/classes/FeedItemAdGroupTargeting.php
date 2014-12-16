<?php



  /**
   * Specifies the adgroup the request context must match in order for
   * the feed item to be considered eligible for serving (aka the targeted adgroup).
   * E.g., if the below adgroup targeting is set to adgroup = X, then the feed
   * item can only serve under adgroup X.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedItemAdGroupTargeting {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "FeedItemAdGroupTargeting";

    /**
     * @access public
     * @var integer
     */
    public $TargetingAdGroupId;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($TargetingAdGroupId = null) {
      $this->TargetingAdGroupId = $TargetingAdGroupId;
    }

  }