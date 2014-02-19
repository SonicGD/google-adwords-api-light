<?php


/**
 * Percentage CPA based bidding where user pays a percent of conversions.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PercentCpaBid extends Bids
{
    /**
     * @access public
     * @var integer
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $percentCpaBidSource;

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
        return "PercentCpaBid";
    }

    public function __construct($bid = null, $percentCpaBidSource = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->percentCpaBidSource = $percentCpaBidSource;
        $this->BidsType = $BidsType;
    }
}