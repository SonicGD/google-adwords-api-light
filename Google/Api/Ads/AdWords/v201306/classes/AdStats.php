<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents stats specific to Ads.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdStats extends Stats
{
    /**
     * @access public
     * @var double
     */
    public $percentServed;

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
        return "AdStats";
    }

    public function __construct(
        $percentServed = null,
        $startDate = null,
        $endDate = null,
        $network = null,
        $clicks = null,
        $impressions = null,
        $cost = null,
        $averagePosition = null,
        $averageCpc = null,
        $averageCpm = null,
        $ctr = null,
        $conversions = null,
        $viewThroughConversions = null,
        $totalBudget = null,
        $StatsType = null
    ) {
        parent::__construct();
        $this->percentServed = $percentServed;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->network = $network;
        $this->clicks = $clicks;
        $this->impressions = $impressions;
        $this->cost = $cost;
        $this->averagePosition = $averagePosition;
        $this->averageCpc = $averageCpc;
        $this->averageCpm = $averageCpm;
        $this->ctr = $ctr;
        $this->conversions = $conversions;
        $this->viewThroughConversions = $viewThroughConversions;
        $this->totalBudget = $totalBudget;
        $this->StatsType = $StatsType;
    }
}