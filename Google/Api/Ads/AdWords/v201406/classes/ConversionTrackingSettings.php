<?php


  /**
   * A collection of customer-wide settings related to AdWords Conversion Tracking. Settings
   * that apply at the conversion type level can be accessed and modified though
   * {@code ConversionTrackerService}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionTrackingSettings
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
      const XSI_TYPE = "ConversionTrackingSettings";

    /**
     * @access public
     * @var cmConversionDeduplicationMode
     */
    public $conversionOptimizerMode;

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

      public function __construct($conversionOptimizerMode = null)
      {
          $this->conversionOptimizerMode = $conversionOptimizerMode;
      }
  }
