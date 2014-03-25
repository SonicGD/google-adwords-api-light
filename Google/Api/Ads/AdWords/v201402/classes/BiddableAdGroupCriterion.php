<?php


/**
 * A biddable (positive) criterion in an adgroup.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class BiddableAdGroupCriterion extends AdGroupCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "BiddableAdGroupCriterion";

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
        $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
        $this->bidModifier = $bidModifier;
        $this->adGroupId = $adGroupId;
        $this->criterionUse = $criterionUse;
        $this->criterion = $criterion;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->AdGroupCriterionType = $AdGroupCriterionType;
    }
}