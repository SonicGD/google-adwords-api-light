<?php


  /**
   * Represents an ad in an ad group.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAd
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "AdGroupAd";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Ad
     */
    public $ad;

    /**
     * @access public
     * @var AdGroupAdExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var tnsAdGroupAdStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsAdGroupAdApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var string[]
     */
    public $disapprovalReasons;

    /**
     * @access public
     * @var boolean
     */
    public $trademarkDisapproved;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($adGroupId = null, $ad = null, $experimentData = null, $status = null, $approvalStatus = null, $disapprovalReasons = null, $trademarkDisapproved = null, $labels = null, $forwardCompatibilityMap = null)
      {
          $this->adGroupId = $adGroupId;
          $this->ad = $ad;
          $this->experimentData = $experimentData;
          $this->status = $status;
          $this->approvalStatus = $approvalStatus;
          $this->disapprovalReasons = $disapprovalReasons;
          $this->trademarkDisapproved = $trademarkDisapproved;
          $this->labels = $labels;
          $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      }
  }
