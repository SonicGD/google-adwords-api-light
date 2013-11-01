<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Usage stats about a single {@link ConversionTracker}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionTrackerStats
{
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