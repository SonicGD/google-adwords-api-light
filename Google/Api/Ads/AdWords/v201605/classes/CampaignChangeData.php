<?php


/**
 * Holds information about a changed campaign and any ad groups under
 * that have changed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CampaignChangeData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201605";
    const XSI_TYPE = "CampaignChangeData";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $campaignChangeStatus;

    /**
     * @access public
     * @var AdGroupChangeData[]
     */
    public $changedAdGroups;

    /**
     * @access public
     * @var integer[]
     */
    public $addedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $removedCampaignCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $removedFeeds;

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
        $campaignId = null,
        $campaignChangeStatus = null,
        $changedAdGroups = null,
        $addedCampaignCriteria = null,
        $removedCampaignCriteria = null,
        $changedFeeds = null,
        $removedFeeds = null
    ) {
        $this->campaignId = $campaignId;
        $this->campaignChangeStatus = $campaignChangeStatus;
        $this->changedAdGroups = $changedAdGroups;
        $this->addedCampaignCriteria = $addedCampaignCriteria;
        $this->removedCampaignCriteria = $removedCampaignCriteria;
        $this->changedFeeds = $changedFeeds;
        $this->removedFeeds = $removedFeeds;
    }

}