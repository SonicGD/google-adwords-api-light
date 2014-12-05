<?php


  /**
   * A marker interface for entities that can be operated upon in mutate
   * operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Operand
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "Operand";

    /**
     * @access public
     * @var AdGroupAdLabel
     */
    public $AdGroupAdLabel;

    /**
     * @access public
     * @var AdGroupAd
     */
    public $AdGroupAd;

    /**
     * @access public
     * @var AdGroupBidModifier
     */
    public $AdGroupBidModifier;

    /**
     * @access public
     * @var AdGroupCriterionLabel
     */
    public $AdGroupCriterionLabel;

    /**
     * @access public
     * @var AdGroupCriterion
     */
    public $AdGroupCriterion;

    /**
     * @access public
     * @var AdGroupLabel
     */
    public $AdGroupLabel;

    /**
     * @access public
     * @var AdGroup
     */
    public $AdGroup;

    /**
     * @access public
     * @var Ad
     */
    public $Ad;

    /**
     * @access public
     * @var Budget
     */
    public $Budget;

    /**
     * @access public
     * @var CampaignAdExtension
     */
    public $CampaignAdExtension;

    /**
     * @access public
     * @var CampaignCriterion
     */
    public $CampaignCriterion;

    /**
     * @access public
     * @var CampaignLabel
     */
    public $CampaignLabel;

    /**
     * @access public
     * @var Campaign
     */
    public $Campaign;

    /**
     * @access public
     * @var FeedItem
     */
    public $FeedItem;

    /**
     * @access public
     * @var Job
     */
    public $Job;

    /**
     * @access public
     * @var Label
     */
    public $Label;

    /**
     * @access public
     * @var Media
     */
    public $Media;

    /**
     * @access public
     * @var PlaceHolder
     */
    public $PlaceHolder;

    /**
     * @access public
     * @var TargetList
     */
    public $TargetList;

    /**
     * @access public
     * @var Target
     */
    public $Target;

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

      public function __construct($AdGroupAdLabel = null, $AdGroupAd = null, $AdGroupBidModifier = null, $AdGroupCriterionLabel = null, $AdGroupCriterion = null, $AdGroupLabel = null, $AdGroup = null, $Ad = null, $Budget = null, $CampaignAdExtension = null, $CampaignCriterion = null, $CampaignLabel = null, $Campaign = null, $FeedItem = null, $Job = null, $Label = null, $Media = null, $PlaceHolder = null, $TargetList = null, $Target = null)
      {
          $this->AdGroupAdLabel = $AdGroupAdLabel;
          $this->AdGroupAd = $AdGroupAd;
          $this->AdGroupBidModifier = $AdGroupBidModifier;
          $this->AdGroupCriterionLabel = $AdGroupCriterionLabel;
          $this->AdGroupCriterion = $AdGroupCriterion;
          $this->AdGroupLabel = $AdGroupLabel;
          $this->AdGroup = $AdGroup;
          $this->Ad = $Ad;
          $this->Budget = $Budget;
          $this->CampaignAdExtension = $CampaignAdExtension;
          $this->CampaignCriterion = $CampaignCriterion;
          $this->CampaignLabel = $CampaignLabel;
          $this->Campaign = $Campaign;
          $this->FeedItem = $FeedItem;
          $this->Job = $Job;
          $this->Label = $Label;
          $this->Media = $Media;
          $this->PlaceHolder = $PlaceHolder;
          $this->TargetList = $TargetList;
          $this->Target = $Target;
      }
  }
