<?php


/**
 * A collection of customer-wide settings related to AdWords Conversion Tracking. Settings
 * that apply at the conversion type level can be accessed and modified though
 * {@code ConversionTrackerService}.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ConversionTrackingSettings
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";
    const XSI_TYPE = "ConversionTrackingSettings";

    /**
     * @access public
     * @var cmConversionDeduplicationMode
     */
    public $conversionOptimizerMode;

    /**
     * @access public
     * @var integer
     */
    public $effectiveConversionTrackingId;

    /**
     * @access public
     * @var boolean
     */
    public $usesCrossAccountConversionTracking;

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

    public function __construct($conversionOptimizerMode = null, $effectiveConversionTrackingId = null, $usesCrossAccountConversionTracking = null)
    {
        $this->conversionOptimizerMode = $conversionOptimizerMode;
        $this->effectiveConversionTrackingId = $effectiveConversionTrackingId;
        $this->usesCrossAccountConversionTracking = $usesCrossAccountConversionTracking;
    }

}