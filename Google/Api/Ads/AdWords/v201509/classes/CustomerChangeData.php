<?php


/**
 * Holds information about changes to a customer
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CustomerChangeData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201509";
    const XSI_TYPE = "CustomerChangeData";

    /**
     * @access public
     * @var CampaignChangeData[]
     */
    public $changedCampaigns;

    /**
     * @access public
     * @var FeedChangeData[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var string
     */
    public $lastChangeTimestamp;

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

    public function __construct($changedCampaigns = null, $changedFeeds = null, $lastChangeTimestamp = null)
    {
        $this->changedCampaigns = $changedCampaigns;
        $this->changedFeeds = $changedFeeds;
        $this->lastChangeTimestamp = $lastChangeTimestamp;
    }

}