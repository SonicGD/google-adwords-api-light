<?php


/**
 * Represents a set of stats for a daily traffic estimate.
 * As of v201406 {@code averageCpc}, {@code averagePosition} and {@code clickThroughRate} will be
 * {@code null} when not defined (respectively, if {@code clicksPerDay} or
 * {@code impressionsPerDay} are 0).
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class StatsEstimate
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "StatsEstimate";

    /**
     * @access public
     * @var Money
     */
    public $averageCpc;

    /**
     * @access public
     * @var double
     */
    public $averagePosition;

    /**
     * @access public
     * @var double
     */
    public $clickThroughRate;

    /**
     * @access public
     * @var double
     */
    public $clicksPerDay;

    /**
     * @access public
     * @var double
     */
    public $impressionsPerDay;

    /**
     * @access public
     * @var Money
     */
    public $totalCost;

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
        $averageCpc = null,
        $averagePosition = null,
        $clickThroughRate = null,
        $clicksPerDay = null,
        $impressionsPerDay = null,
        $totalCost = null
    ) {
        $this->averageCpc = $averageCpc;
        $this->averagePosition = $averagePosition;
        $this->clickThroughRate = $clickThroughRate;
        $this->clicksPerDay = $clicksPerDay;
        $this->impressionsPerDay = $impressionsPerDay;
        $this->totalCost = $totalCost;
    }
}
