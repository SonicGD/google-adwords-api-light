<?php


/**
 * In budget optimizer, Google automatically places bids for the user based on
 * their daily/monthly budget.
 *
 * <p><b>Note:</b>
 * This bidding strategy has been deprecated and replaced with
 * {@linkplain TargetSpendBiddingScheme TargetSpend}. We no longer allow
 * advertisers to opt into this strategy--{@code BudgetOptimizerBiddingScheme}
 * solely exists so that advertisers can access campaigns that had specified
 * this strategy.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BudgetOptimizerBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "BudgetOptimizerBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var boolean
     */
    public $enhancedCpcEnabled;

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

    public function __construct($bidCeiling = null, $enhancedCpcEnabled = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->bidCeiling = $bidCeiling;
        $this->enhancedCpcEnabled = $enhancedCpcEnabled;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}