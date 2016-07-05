<?php


/**
 * CPA Bids.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CpaBid extends Bids
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CpaBid";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $bidSource;

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

    public function __construct($bid = null, $bidSource = null, $BidsType = null)
    {
        parent::__construct();
        $this->bid = $bid;
        $this->bidSource = $bidSource;
        $this->BidsType = $BidsType;
    }

}