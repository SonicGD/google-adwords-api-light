<?php


/**
 * A conversion tracker created through AdWords Conversion Tracking.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdWordsConversionTracker extends ConversionTracker
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdWordsConversionTracker";

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerTextFormat
     */
    public $textFormat;

    /**
     * @access public
     * @var string
     */
    public $conversionPageLanguage;

    /**
     * @access public
     * @var string
     */
    public $backgroundColor;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerTrackingCodeType
     */
    public $trackingCodeType;

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
        $snippet = null,
        $textFormat = null,
        $conversionPageLanguage = null,
        $backgroundColor = null,
        $trackingCodeType = null,
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
        $this->snippet = $snippet;
        $this->textFormat = $textFormat;
        $this->conversionPageLanguage = $conversionPageLanguage;
        $this->backgroundColor = $backgroundColor;
        $this->trackingCodeType = $trackingCodeType;
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