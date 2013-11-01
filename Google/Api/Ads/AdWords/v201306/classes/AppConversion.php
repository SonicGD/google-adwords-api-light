<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A ConversionTracker for mobile apps.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AppConversion extends ConversionTracker
{
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
    public $userRevenueValue;

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
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct(
        $appId = null,
        $appPlatform = null,
        $userRevenueValue = null,
        $snippet = null,
        $appConversionType = null,
        $id = null,
        $name = null,
        $status = null,
        $category = null,
        $stats = null,
        $viewthroughLookbackWindow = null,
        $isProductAdsChargeable = null,
        $productAdsChargeableConversionWindow = null,
        $ConversionTrackerType = null
    ) {
        parent::__construct();
        $this->appId = $appId;
        $this->appPlatform = $appPlatform;
        $this->userRevenueValue = $userRevenueValue;
        $this->snippet = $snippet;
        $this->appConversionType = $appConversionType;
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->category = $category;
        $this->stats = $stats;
        $this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
        $this->isProductAdsChargeable = $isProductAdsChargeable;
        $this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
        $this->ConversionTrackerType = $ConversionTrackerType;
    }
}