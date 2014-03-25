<?php


/**
 * Target Spend bidding scheme, in which Google automatically places
 * bids for the user based on their daily/monthly budget or optional
 * spend target.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TargetSpendBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "TargetSpendBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $spendTarget;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($bidCeiling = null, $spendTarget = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->bidCeiling = $bidCeiling;
        $this->spendTarget = $spendTarget;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}