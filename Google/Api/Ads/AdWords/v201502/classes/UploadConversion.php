<?php


/**
 * A conversion type that receives conversions by having them uploaded
 * through the OfflineConversionFeedService.
 *
 * After successfully creating a new UploadConversion, send the name of this conversion type
 * along with your conversion details to the OfflineConversionFeedService
 * to attribute those conversions to this conversion type.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class UploadConversion extends ConversionTracker
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "UploadConversion";

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
        $id = null,
        $originalConversionTypeId = null,
        $name = null,
        $status = null,
        $category = null,
        $conversionTypeOwnerCustomerId = null,
        $stats = null,
        $viewthroughLookbackWindow = null,
        $isProductAdsChargeable = null,
        $productAdsChargeableConversionWindow = null,
        $ctcLookbackWindow = null,
        $countingType = null,
        $defaultRevenueValue = null,
        $defaultRevenueCurrencyCode = null,
        $alwaysUseDefaultRevenueValue = null,
        $excludeFromBidding = null,
        $ConversionTrackerType = null
    ) {
        parent::__construct();
        $this->id = $id;
        $this->originalConversionTypeId = $originalConversionTypeId;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->conversionTypeOwnerCustomerId = $conversionTypeOwnerCustomerId;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ctcLookbackWindow = $ctcLookbackWindow;
        $this->countingType = $countingType;
        $this->defaultRevenueValue = $defaultRevenueValue;
        $this->defaultRevenueCurrencyCode = $defaultRevenueCurrencyCode;
        $this->alwaysUseDefaultRevenueValue = $alwaysUseDefaultRevenueValue;
        $this->excludeFromBidding = $excludeFromBidding;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}
