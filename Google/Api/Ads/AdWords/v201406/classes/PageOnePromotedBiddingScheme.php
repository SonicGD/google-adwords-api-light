<?php


  /**
   * Page-One Promoted bidding scheme, which sets max cpc bids to
   * target impressions on page one or page one promoted slots on google.com.
   * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PageOnePromotedBiddingScheme extends BiddingScheme
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PageOnePromotedBiddingScheme";

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
     * @return the namespace of this class
     */
    public function getNamespace()
    {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
      return self::XSI_TYPE;
    }

    public function __construct($strategyGoal = null, $bidCeiling = null, $bidModifier = null, $bidChangesForRaisesOnly = null, $raiseBidWhenBudgetConstained = null, $raiseBidWhenLowQualityScore = null, $BiddingSchemeType = null)
    {
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
