<?php


/**
 * A conversion type that receives conversions by having them uploaded
 * through the OfflineConversionFeedService.
 *
 * After successfully creating a new UploadConversion, send the name of this conversion type
 * along with your conversion details to the OfflineConversionFeedService
 * to attribute those conversions to this conversion type.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class UploadConversion extends ConversionTracker
{
    /**
     * @access public
     * @var string
     */
    public $userRevenueValue;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "UploadConversion";
    }

    public function __construct(
        $userRevenueValue = null,
        $id = null,
        $name = null,
        $status = null,
        $category = null,
        $stats = null,
        $viewthroughLookbackWindow = null,
        $isProductAdsChargeable = null,
        $productAdsChargeableConversionWindow = null,
        $ctcLookbackWindow = null,
        $ConversionTrackerType = null
    ) {
        parent::__construct();
        $this->userRevenueValue = $userRevenueValue;
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ctcLookbackWindow = $ctcLookbackWindow;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}