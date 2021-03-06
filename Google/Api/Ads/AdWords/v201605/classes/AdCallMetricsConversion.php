<?php


/**
 * A ConversionTracker for phone calls from conversion-tracked call extensions.
 * A call made from the call extension is reported as a conversion if it lasts longer
 * than N seconds. This duration is 60 seconds by default. Each call extension can
 * specify the desired conversion configuration.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdCallMetricsConversion extends ConversionTracker
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdCallMetricsConversion";

    /**
     * @access public
     * @var integer
     */
    public $phoneCallDuration;

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
        $phoneCallDuration = null,
        $id = null,
        $originalConversionTypeId = null,
        $name = null,
        $status = null,
        $category = null,
        $conversionTypeOwnerCustomerId = null,
        $viewthroughLookbackWindow = null,
        $ctcLookbackWindow = null,
        $countingType = null,
        $defaultRevenueValue = null,
        $defaultRevenueCurrencyCode = null,
        $alwaysUseDefaultRevenueValue = null,
        $excludeFromBidding = null,
        $mostRecentConversionDate = null,
        $lastReceivedRequestTime = null,
        $ConversionTrackerType = null
    ) {
        parent::__construct();
        $this->phoneCallDuration = $phoneCallDuration;
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