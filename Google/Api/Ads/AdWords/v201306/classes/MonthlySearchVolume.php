<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A keyword response value representing search volume for a single month. An
 * instance with a {@code null} count is valid, indicating that the information
 * is unavailable.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MonthlySearchVolume
{
    /**
     * @access public
     * @var integer
     */
    public $year;

    /**
     * @access public
     * @var integer
     */
    public $month;

    /**
     * @access public
     * @var integer
     */
    public $count;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201306";
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

    public function __construct($year = null, $month = null, $count = null)
    {
        $this->year = $year;
        $this->month = $month;
        $this->count = $count;
    }
}