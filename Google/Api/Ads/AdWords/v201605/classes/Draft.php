<?php


/**
 * The interface object which contains the basic information of a draft.  Entity specific
 * information in the campaign tree are represented by their respective entities objects with a
 * corresponding draftId.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Draft
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Draft";

    /**
     * @access public
     * @var integer
     */
    public $draftId;

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var string
     */
    public $draftName;

    /**
     * @access public
     * @var tnsDraftStatus
     */
    public $draftStatus;

    /**
     * @access public
     * @var integer
     */
    public $draftCampaignId;

    /**
     * @access public
     * @var boolean
     */
    public $hasRunningTrial;

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
        $draftId = null,
        $baseCampaignId = null,
        $draftName = null,
        $draftStatus = null,
        $draftCampaignId = null,
        $hasRunningTrial = null
    ) {
        $this->draftId = $draftId;
        $this->baseCampaignId = $baseCampaignId;
        $this->draftName = $draftName;
        $this->draftStatus = $draftStatus;
        $this->draftCampaignId = $draftCampaignId;
        $this->hasRunningTrial = $hasRunningTrial;
    }

}