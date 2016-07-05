<?php


/**
 * A setting specifying when and which extensions should serve at a given level (customer, campaign,
 * or ad group).
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExtensionSetting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ExtensionSetting";

    /**
     * @access public
     * @var ExtensionFeedItem[]
     */
    public $extensions;

    /**
     * @access public
     * @var tnsExtensionSettingPlatform
     */
    public $platformRestrictions;

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

    public function __construct($extensions = null, $platformRestrictions = null)
    {
        $this->extensions = $extensions;
        $this->platformRestrictions = $platformRestrictions;
    }

}