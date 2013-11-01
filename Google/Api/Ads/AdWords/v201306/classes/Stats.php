<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Statistics about an ad or criterion within an ad group or campaign.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Stats
{
    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

    /**
     * @access public
     * @var tnsStatsNetwork
     */
    public $network;

    /**
     * @access public
     * @var integer
     */
    public $clicks;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var Money
     */
    public $cost;

    /**
     * @access public
     * @var double
     */
    public $averagePosition;

    /**
     * @access public
     * @var Money
     */
    public $averageCpc;

    /**
     * @access public
     * @var Money
     */
    public $averageCpm;

    /**
     * @access public
     * @var double
     */
    public $ctr;

    /**
     * @access public
     * @var integer
     */
    public $conversions;

    /**
     * @access public
     * @var integer
     */
    public $viewThroughConversions;

    /**
     * @access public
     * @var Money
     */
    public $totalBudget;

    /**
     * @access public
     * @var string
     */
    public $StatsType;

    private $_parameterMap = array(
        "Stats.Type" => "StatsType",
    );

    /**
     * Provided for setting non-php-standard named variables
     *
     * @param $var   Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @param $var Variable name to get.
     *
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!array_key_exists($var, $this->_parameterMap)) {
            return null;
        } else {
            return $this->{$this->_parameterMap[$var]};
        }
    }

    /**
     * Provided for getting non-php-standard named variables
     *
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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