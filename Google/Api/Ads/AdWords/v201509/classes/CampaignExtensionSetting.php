<?php


/**
 * A CampaignExtensionSetting is used to add or modify extensions being served for the specified
 * campaign.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignExtensionSetting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "CampaignExtensionSetting";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * @access public
     * @var tnsFeedType
     */
    public $extensionType;

    /**
     * @access public
     * @var ExtensionSetting
     */
    public $extensionSetting;

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

    public function __construct($campaignId = null, $extensionType = null, $extensionSetting = null)
    {
        $this->campaignId = $campaignId;
        $this->extensionType = $extensionType;
        $this->extensionSetting = $extensionSetting;
    }

}