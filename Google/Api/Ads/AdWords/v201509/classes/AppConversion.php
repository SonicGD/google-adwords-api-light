<?php


/**
 * A ConversionTracker for mobile apps.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AppConversion extends ConversionTracker
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AppConversion";

    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var tnsAppConversionAppPlatform
     */
    public $appPlatform;

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var tnsAppConversionAppConversionType
     */
    public $appConversionType;

    /**
     * @access public
     * @var string
     */
    public $appPostbackUrl;

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
        $appId = null,
        $appPlatform = null,
        $snippet = null,
        $appConversionType = null,
        $appPostbackUrl = null,
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
        $this->appId = $appId;
        $this->appPlatform = $appPlatform;
        $this->snippet = $snippet;
        $this->appConversionType = $appConversionType;
        $this->appPostbackUrl = $appPostbackUrl;
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