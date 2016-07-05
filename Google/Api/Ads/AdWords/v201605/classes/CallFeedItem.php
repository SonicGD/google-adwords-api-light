<?php


/**
 * Represents a Call extension.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CallFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CallFeedItem";

    /**
     * @access public
     * @var string
     */
    public $callPhoneNumber;

    /**
     * @access public
     * @var string
     */
    public $callCountryCode;

    /**
     * @access public
     * @var boolean
     */
    public $callTracking;

    /**
     * @access public
     * @var CallConversionType
     */
    public $callConversionType;

    /**
     * @access public
     * @var boolean
     */
    public $disableCallConversionTracking;

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
        $callPhoneNumber = null,
        $callCountryCode = null,
        $callTracking = null,
        $callConversionType = null,
        $disableCallConversionTracking = null,
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $feedType = null,
        $startTime = null,
        $endTime = null,
        $devicePreference = null,
        $scheduling = null,
        $campaignTargeting = null,
        $adGroupTargeting = null,
        $keywordTargeting = null,
        $geoTargeting = null,
        $policyData = null,
        $ExtensionFeedItemType = null
    ) {
        parent::__construct();
        $this->callPhoneNumber = $callPhoneNumber;
        $this->callCountryCode = $callCountryCode;
        $this->callTracking = $callTracking;
        $this->callConversionType = $callConversionType;
        $this->disableCallConversionTracking = $disableCallConversionTracking;
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->feedType = $feedType;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->campaignTargeting = $campaignTargeting;
        $this->adGroupTargeting = $adGroupTargeting;
        $this->keywordTargeting = $keywordTargeting;
        $this->geoTargeting = $geoTargeting;
        $this->policyData = $policyData;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }

}