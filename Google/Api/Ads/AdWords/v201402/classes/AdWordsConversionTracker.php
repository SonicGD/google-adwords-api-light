<?php


/**
 * A conversion tracker created through AdWords Conversion Tracking.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdWordsConversionTracker extends ConversionTracker
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "AdWordsConversionTracker";

    /**
     * @access public
     * @var string
     */
    public $snippet;

    /**
     * @access public
     * @var tnsAdWordsConversionTrackerMarkupLanguage
     */
    public $markupLanguage;

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
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $snippet = null,
        $markupLanguage = null,
        $textFormat = null,
        $conversionPageLanguage = null,
        $backgroundColor = null,
        $trackingCodeType = null,
        $id = null,
        $name = null,
        $status = null,
        $category = null,
        $stats = null,
        $viewthroughLookbackWindow = null,
        $isProductAdsChargeable = null,
        $productAdsChargeableConversionWindow = null,
        $ctcLookbackWindow = null,
        $countingType = null,
        $defaultRevenueValue = null,
        $alwaysUseDefaultRevenueValue = null,
        $ConversionTrackerType = null
    ) {
        parent::__construct();
        $this->snippet = $snippet;
        $this->markupLanguage = $markupLanguage;
        $this->textFormat = $textFormat;
        $this->conversionPageLanguage = $conversionPageLanguage;
        $this->backgroundColor = $backgroundColor;
        $this->trackingCodeType = $trackingCodeType;
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ctcLookbackWindow = $ctcLookbackWindow;
        $this->countingType = $countingType;
        $this->defaultRevenueValue = $defaultRevenueValue;
        $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}