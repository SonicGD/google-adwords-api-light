<?php


/**
 * Represents an ad in an ad group.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroupAd
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
    public $trademarks;

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
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $adGroupId = null,
        $ad = null,
        $experimentData = null,
        $status = null,
        $approvalStatus = null,
        $trademarks = null,
        $disapprovalReasons = null,
        $trademarkDisapproved = null,
        $labels = null,
        $baseCampaignId = null,
        $baseAdGroupId = null,
        $forwardCompatibilityMap = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->ad = $ad;
        $this->experimentData = $experimentData;
        $this->status = $status;
        $this->approvalStatus = $approvalStatus;
        $this->trademarks = $trademarks;
        $this->disapprovalReasons = $disapprovalReasons;
        $this->trademarkDisapproved = $trademarkDisapproved;
        $this->labels = $labels;
        $this->baseCampaignId = $baseCampaignId;
        $this->baseAdGroupId = $baseAdGroupId;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    }

}