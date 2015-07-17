<?php


/**
 * Represents a Call extension.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CallFeedItem extends ExtensionFeedItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
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
     * @var boolean
     */
    public $callOnly;

    /**
     * @access public
     * @var CallConversionType
     */
    public $callConversionType;

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

    public function __construct(
        $callPhoneNumber = null,
        $callCountryCode = null,
        $callTracking = null,
        $callOnly = null,
        $callConversionType = null,
        $feedId = null,
        $feedItemId = null,
        $status = null,
        $feedType = null,
        $startTime = null,
        $endTime = null,
        $devicePreference = null,
        $scheduling = null,
        $policyData = null,
        $ExtensionFeedItemType = null
    ) {
        parent::__construct();
        $this->callPhoneNumber = $callPhoneNumber;
        $this->callCountryCode = $callCountryCode;
        $this->callTracking = $callTracking;
        $this->callOnly = $callOnly;
        $this->callConversionType = $callConversionType;
        $this->feedId = $feedId;
        $this->feedItemId = $feedItemId;
        $this->status = $status;
        $this->feedType = $feedType;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->devicePreference = $devicePreference;
        $this->scheduling = $scheduling;
        $this->policyData = $policyData;
        $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }

}