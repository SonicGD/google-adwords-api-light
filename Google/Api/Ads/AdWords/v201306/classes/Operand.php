<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A marker interface for entities that can be operated upon in mutate
 * operations.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Operand
{
    /**
     * @access public
     * @var AdExtensionOverride
     */
    public $AdExtensionOverride;

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
     * @var AdGroupCriterion
     */
    public $AdGroupCriterion;

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
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Operand";
    }

    public function __construct(
        $AdExtensionOverride = null,
        $AdGroupAd = null,
        $AdGroupBidModifier = null,
        $AdGroupCriterion = null,
        $AdGroup = null,
        $Ad = null,
        $Budget = null,
        $CampaignAdExtension = null,
        $CampaignCriterion = null,
        $Campaign = null,
        $FeedItem = null,
        $Job = null,
        $Media = null,
        $PlaceHolder = null,
        $TargetList = null,
        $Target = null
    ) {
        $this->AdExtensionOverride = $AdExtensionOverride;
        $this->AdGroupAd = $AdGroupAd;
        $this->AdGroupBidModifier = $AdGroupBidModifier;
        $this->AdGroupCriterion = $AdGroupCriterion;
        $this->AdGroup = $AdGroup;
        $this->Ad = $Ad;
        $this->Budget = $Budget;
        $this->CampaignAdExtension = $CampaignAdExtension;
        $this->CampaignCriterion = $CampaignCriterion;
        $this->Campaign = $Campaign;
        $this->FeedItem = $FeedItem;
        $this->Job = $Job;
        $this->Media = $Media;
        $this->PlaceHolder = $PlaceHolder;
        $this->TargetList = $TargetList;
        $this->Target = $Target;
    }
}