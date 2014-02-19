<?php


/**
 * Page-One Promoted bidding scheme, which sets max cpc bids to
 * target impressions on page one or page one promoted slots on google.com.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PageOnePromotedBiddingScheme extends BiddingScheme
{
    /**
     * @access public
     * @var tnsPageOnePromotedBiddingSchemeStrategyGoal
     */
    public $strategyGoal;

    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

    /**
     * @access public
     * @var boolean
     */
    public $bidChangesForRaisesOnly;

    /**
     * @access public
     * @var boolean
     */
    public $raiseBidWhenBudgetConstained;

    /**
     * @access public
     * @var boolean
     */
    public $raiseBidWhenLowQualityScore;

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
        return "PageOnePromotedBiddingScheme";
    }

    public function __construct(
        $strategyGoal = null,
        $bidCeiling = null,
        $bidModifier = null,
        $bidChangesForRaisesOnly = null,
        $raiseBidWhenBudgetConstained = null,
        $raiseBidWhenLowQualityScore = null,
        $BiddingSchemeType = null
    ) {
        parent::__construct();
        $this->strategyGoal = $strategyGoal;
        $this->bidCeiling = $bidCeiling;
        $this->bidModifier = $bidModifier;
        $this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
        $this->raiseBidWhenBudgetConstained = $raiseBidWhenBudgetConstained;
        $this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}