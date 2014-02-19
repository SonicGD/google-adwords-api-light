<?php


/**
 * A frequency cap is the maximum number of times an ad (or some set of ads) can
 * be shown to a user over a particular time period.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class FrequencyCap
{
    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var tnsTimeUnit
     */
    public $timeUnit;

    /**
     * @access public
     * @var tnsLevel
     */
    public $level;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "FrequencyCap";
    }

    public function __construct($impressions = null, $timeUnit = null, $level = null)
    {
        $this->impressions = $impressions;
        $this->timeUnit = $timeUnit;
        $this->level = $level;
    }
}