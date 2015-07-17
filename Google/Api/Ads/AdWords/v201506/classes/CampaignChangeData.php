<?php


/**
 * Holds information about a changed campaign and any ad groups under
 * that have changed.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CampaignChangeData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201506";
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
    public $addedAdExtensions;

    /**
     * @access public
     * @var integer[]
     */
    public $removedAdExtensions;

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

    public function __construct(
        $campaignId = null,
        $campaignChangeStatus = null,
        $changedAdGroups = null,
        $addedCampaignCriteria = null,
        $removedCampaignCriteria = null,
        $addedAdExtensions = null,
        $removedAdExtensions = null,
        $changedFeeds = null,
        $removedFeeds = null
    ) {
        $this->campaignId = $campaignId;
        $this->campaignChangeStatus = $campaignChangeStatus;
        $this->changedAdGroups = $changedAdGroups;
        $this->addedCampaignCriteria = $addedCampaignCriteria;
        $this->removedCampaignCriteria = $removedCampaignCriteria;
        $this->addedAdExtensions = $addedAdExtensions;
        $this->removedAdExtensions = $removedAdExtensions;
        $this->changedFeeds = $changedFeeds;
        $this->removedFeeds = $removedFeeds;
    }

}