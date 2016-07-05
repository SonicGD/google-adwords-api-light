<?php


/**
 * <a href="https://support.google.com/adwords/answer/6268632">Target CPA</a> is an automated bid
 * strategy that sets bids to help get as many conversions as possible at the target
 * cost-per-acquisition (CPA) you set.
 *
 * <p>A {@linkplain #targetCpa target CPA} must be set for the strategy, but can also be optionally
 * set for individual ad groups in the strategy. Ad group targets, if set, will override strategy
 * targets.
 *
 * <p>Note that campaigns must meet
 * <a href="https://support.google.com/adwords/answer/2471188">specific eligibility requirements</a>
 * before they can use the Target CPA bid strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TargetCpaBiddingScheme extends BiddingScheme
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TargetCpaBiddingScheme";

    /**
     * @access public
     * @var Money
     */
    public $targetCpa;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidCeiling;

    /**
     * @access public
     * @var Money
     */
    public $maxCpcBidFloor;

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

    public function __construct(
        $targetCpa = null,
        $maxCpcBidCeiling = null,
        $maxCpcBidFloor = null,
        $BiddingSchemeType = null
    ) {
        parent::__construct();
        $this->targetCpa = $targetCpa;
        $this->maxCpcBidCeiling = $maxCpcBidCeiling;
        $this->maxCpcBidFloor = $maxCpcBidFloor;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }

}