<?php


/**
 * An error that has occurred while asynchronously processing the promotion of a draft.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DraftAsyncError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DraftAsyncError";

    /**
     * @access public
     * @var integer
     */
    public $baseCampaignId;

    /**
     * @access public
     * @var integer
     */
    public $draftId;

    /**
     * @access public
     * @var integer
     */
    public $draftCampaignId;

    /**
     * @access public
     * @var ApiError
     */
    public $asyncError;

    /**
     * @access public
     * @var integer
     */
    public $baseAdGroupId;

    /**
     * @access public
     * @var integer
     */
    public $draftAdGroupId;

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
        $baseCampaignId = null,
        $draftId = null,
        $draftCampaignId = null,
        $asyncError = null,
        $baseAdGroupId = null,
        $draftAdGroupId = null
    ) {
        $this->baseCampaignId = $baseCampaignId;
        $this->draftId = $draftId;
        $this->draftCampaignId = $draftCampaignId;
        $this->asyncError = $asyncError;
        $this->baseAdGroupId = $baseAdGroupId;
        $this->draftAdGroupId = $draftAdGroupId;
    }

}