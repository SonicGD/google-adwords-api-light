<?php


/**
 * Represents a set of stats for a daily traffic estimate.
 *
 * <p>{@code averageCpc}, {@code averagePosition} and {@code clickThroughRate} will be
 * {@code null} when not defined and {@code clicksPerDay} or {@code impressionsPerDay}
 * is {@code 0}, respectively.</p>
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class StatsEstimate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
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