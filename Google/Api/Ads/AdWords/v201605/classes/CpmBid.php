<?php


/**
 * Manual impression based bids.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CpmBid extends Bids
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CpmBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $cpmBidSource;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($bid = null, $cpmBidSource = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->cpmBidSource = $cpmBidSource;
        $this->BidsType = $BidsType;
    }

}