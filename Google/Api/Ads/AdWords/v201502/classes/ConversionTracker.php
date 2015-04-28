<?php


/**
 * An abstract Conversion base class.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ConversionTracker
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ConversionTracker";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var integer
   */
  public $originalConversionTypeId;

  /**
   * @access public
   * @var string
   */
  public $name;

  /**
   * @access public
   * @var tnsConversionTrackerStatus
   */
  public $status;

  /**
   * @access public
   * @var tnsConversionTrackerCategory
   */
  public $category;

  /**
   * @access public
   * @var integer
   */
  public $conversionTypeOwnerCustomerId;

  /**
   * @access public
   * @var ConversionTrackerStats
   */
  public $stats;

  /**
   * @access public
   * @var integer
   */
  public $viewthroughLookbackWindow;

  /**
   * @access public
   * @var boolean
   */
  public $isProductAdsChargeable;

  /**
   * @access public
   * @var integer
   */
  public $productAdsChargeableConversionWindow;

  /**
   * @access public
   * @var integer
   */
  public $ctcLookbackWindow;

  /**
   * @access public
   * @var tnsConversionDeduplicationMode
   */
  public $countingType;

  /**
   * @access public
   * @var double
   */
  public $defaultRevenueValue;

  /**
   * @access public
   * @var string
   */
  public $defaultRevenueCurrencyCode;

  /**
   * @access public
   * @var boolean
   */
  public $alwaysUseDefaultRevenueValue;

  /**
   * @access public
   * @var boolean
   */
  public $excludeFromBidding;

  /**
   * @access public
   * @var string
   */
  public $ConversionTrackerType;
    private $_parameterMap = [
      "ConversionTracker.Type" => "ConversionTrackerType",
  ];

  /**
   * Provided for setting non-php-standard named variables
   * @param $var   Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value)
  {
      $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var)
  {
      if (!isset($this->_parameterMap[$var])) {
          return null;
      }

      return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap()
  {
      return $this->_parameterMap;
  }

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
