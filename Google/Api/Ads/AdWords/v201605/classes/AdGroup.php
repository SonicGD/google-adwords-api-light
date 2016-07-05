<?php


/**
 * Represents an ad group.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroup
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdGroup";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $campaignName;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsAdGroupStatus
     */
    public $status;

    /**
     * @access public
     * @var Setting[]
     */
    public $settings;

    /**
     * @access public
     * @var AdGroupExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var Label[]
     */
    public $labels;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

    /**
     * @access public
     * @var BiddingStrategyConfiguration
     */
    public $biddingStrategyConfiguration;

    /**
     * @access public
     * @var tnsCriterionTypeGroup
     */
    public $contentBidCriterionTypeGroup;

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;

    /**
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var CustomParameters
     */
    public $urlCustomParameters;

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
        $id = null,
        $campaignId = null,
        $campaignName = null,
        $name = null,
        $status = null,
        $settings = null,
        $experimentData = null,
        $labels = null,
        $forwardCompatibilityMap = null,
        $biddingStrategyConfiguration = null,
        $contentBidCriterionTypeGroup = null,
        $baseCampaignId = null,
        $baseAdGroupId = null,
        $trackingUrlTemplate = null,
        $urlCustomParameters = null
    ) {
        $this->id = $id;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->name = $name;
        $this->status = $status;
        $this->settings = $settings;
        $this->experimentData = $experimentData;
        $this->labels = $labels;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
        $this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
        $this->baseCampaignId = $baseCampaignId;
        $this->baseAdGroupId = $baseAdGroupId;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
        $this->urlCustomParameters = $urlCustomParameters;
    }

}