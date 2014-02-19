<?php


/**
 * Manual click based bids.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CpcBid extends Bids
{
    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var Money
     */
    public $contentBid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $cpcBidSource;

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
        return "CpcBid";
    }

    public function __construct($bid = null, $contentBid = null, $cpcBidSource = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->contentBid = $contentBid;
        $this->cpcBidSource = $cpcBidSource;
        $this->BidsType = $BidsType;
    }
}