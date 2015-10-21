<?php


/**
 * CampaignSharedSets are used for managing the shared sets
 * associated with a campaign.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignSharedSet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignSharedSet";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var string
     */
    public $sharedSetName;

    /**
     * @access public
     * @var tnsSharedSetType
     */
    public $sharedSetType;

    /**
     * @access public
     * @var string
     */
    public $campaignName;

    /**
     * @access public
     * @var tnsCampaignSharedSetStatus
     */
    public $status;

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

    public function __construct($sharedSetId = null, $campaignId = null, $sharedSetName = null, $sharedSetType = null, $campaignName = null, $status = null)
    {
        $this->sharedSetId = $sharedSetId;
        $this->campaignId = $campaignId;
        $this->sharedSetName = $sharedSetName;
        $this->sharedSetType = $sharedSetType;
        $this->campaignName = $campaignName;
        $this->status = $status;
    }

}