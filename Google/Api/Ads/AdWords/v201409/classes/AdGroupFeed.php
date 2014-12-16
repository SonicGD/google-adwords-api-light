<?php



  /**
   * AdGroupFeeds are used to link a feed to an adgroup using a matching function,
   * making the feed's feed items available in the adgroup's ads for substitution.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdGroupFeed {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "AdGroupFeed";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Function
     */
    public $matchingFunction;

    /**
     * @access public
     * @var integer[]
     */
    public $placeholderTypes;

    /**
     * @access public
     * @var tnsAdGroupFeedStatus
     */
    public $status;

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

    public function __construct($feedId = null, $adGroupId = null, $matchingFunction = null, $placeholderTypes = null, $status = null) {
      $this->feedId = $feedId;
      $this->adGroupId = $adGroupId;
      $this->matchingFunction = $matchingFunction;
      $this->placeholderTypes = $placeholderTypes;
      $this->status = $status;
    }

  }