<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A biddable (positive) criterion in an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddableAdGroupCriterion extends AdGroupCriterion
{
    /**
     * @access public
     * @var tnsUserStatus
     */
    public $userStatus;

    /**
     * @access public
     * @var tnsSystemServingStatus
     */
    public $systemServingStatus;

    /**
     * @access public
     * @var tnsApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var string[]
     */
    public $disapprovalReasons;

    /**
     * @access public
     * @var string
     */
    public $destinationUrl;

    /**
     * @access public
     * @var BiddableAdGroupCriterionExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var Bid
     */
    public $firstPageCpc;

    /**
     * @access public
     * @var Bid
     */
    public $topOfPageCpc;

    /**
     * @access public
     * @var QualityInfo
     */
    public $qualityInfo;

    /**
     * @access public
     * @var Stats
     */
    public $stats;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var double
     */
    public $bidModifier;

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
        return "BiddableAdGroupCriterion";
    }

    public function __construct(
        $userStatus = null,
        $systemServingStatus = null,
        $approvalStatus = null,
        $disapprovalReasons = null,
        $destinationUrl = null,
        $experimentData = null,
        $firstPageCpc = null,
        $topOfPageCpc = null,
        $qualityInfo = null,
        $stats = null,
        $biddingStrategyConfiguration = null,
        $bidModifier = null,
        $adGroupId = null,
        $criterionUse = null,
        $criterion = null,
        $forwardCompatibilityMap = null,
        $AdGroupCriterionType = null
    ) {
        parent::__construct();
        $this->userStatus = $userStatus;
        $this->systemServingStatus = $systemServingStatus;
        $this->approvalStatus = $approvalStatus;
        $this->disapprovalReasons = $disapprovalReasons;
        $this->destinationUrl = $destinationUrl;
        $this->experimentData = $experimentData;
        $this->firstPageCpc = $firstPageCpc;
        $this->topOfPageCpc = $topOfPageCpc;
        $this->qualityInfo = $qualityInfo;
        $this->stats = $stats;
        $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
        $this->bidModifier = $bidModifier;
        $this->adGroupId = $adGroupId;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->AdGroupCriterionType = $AdGroupCriterionType;
    }
}