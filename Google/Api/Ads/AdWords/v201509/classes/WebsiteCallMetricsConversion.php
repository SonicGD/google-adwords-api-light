<?php


/**
 * A conversion that happens when a user performs the following sequence of actions:
 * <ul>
 * <li>Clicks on an advertiser's ad</li>
 * <li>
 * Proceeds to the advertiser's website, where special javascript installed on the page
 * produces a dynamically-generated phone number,
 * </li>
 * <li>Calls that number from their home (or other) phone</li>
 * </ul>
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class WebsiteCallMetricsConversion extends ConversionTracker
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "WebsiteCallMetricsConversion";

    /**
     * @access public
     * @var integer
     */
    public $phoneCallDuration;

    /**
     * @access public
     * @var string
     */
    public $snippet;

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

    public function __construct($phoneCallDuration = null, $snippet = null, $id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null)
    {
        parent::__construct();
        $this->phoneCallDuration = $phoneCallDuration;
        $this->snippet = $snippet;
        $this->id = $id;
        $this->originalConversionTypeId = $originalConversionTypeId;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->conversionTypeOwnerCustomerId = $conversionTypeOwnerCustomerId;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->ctcLookbackWindow = $ctcLookbackWindow;
        $this->countingType = $countingType;
        $this->defaultRevenueValue = $defaultRevenueValue;
        $this->defaultRevenueCurrencyCode = $defaultRevenueCurrencyCode;
        $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
        $this->excludeFromBidding = $excludeFromBidding;
        $this->mostRecentConversionDate = $mostRecentConversionDate;
        $this->lastReceivedRequestTime = $lastReceivedRequestTime;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }

}