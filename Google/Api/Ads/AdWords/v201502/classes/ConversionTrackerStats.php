<?php


/**
 * Usage stats about a single {@link ConversionTracker}.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ConversionTrackerStats
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ConversionTrackerStats";

    /**
     * @access public
     * @var integer
     */
    public $numConversionEvents;

    /**
     * @access public
     * @var Money
     */
    public $conversionValue;

    /**
     * @access public
     * @var string
     */
    public $mostRecentConversionDate;

    /**
     * @access public
     * @var integer
     */
    public $numConvertedClicks;

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
        $numConversionEvents = null,
        $conversionValue = null,
        $mostRecentConversionDate = null,
        $numConvertedClicks = null
    ) {
        $this->numConversionEvents = $numConversionEvents;
        $this->conversionValue = $conversionValue;
        $this->mostRecentConversionDate = $mostRecentConversionDate;
        $this->numConvertedClicks = $numConvertedClicks;
    }
}
