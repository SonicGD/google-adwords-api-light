<?php


/**
 * Represents an ad group.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroup
{
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
        return "AdGroup";
    }

    public function __construct(
        $id = null,
        $campaignId = null,
        $campaignName = null,
        $name = null,
        $status = null,
        $settings = null,
        $experimentData = null,
        $forwardCompatibilityMap = null,
        $biddingStrategyConfiguration = null,
        $contentBidCriterionTypeGroup = null
    ) {
        $this->id = $id;
        $this->campaignId = $campaignId;
        $this->campaignName = $campaignName;
        $this->name = $name;
        $this->status = $status;
        $this->settings = $settings;
        $this->experimentData = $experimentData;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
        $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
        $this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
    }
}