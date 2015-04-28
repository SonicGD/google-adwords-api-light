<?php


/**
 * An AdGroupExtensionSetting is used add or modify extensions being served for the specified
 * adgroup.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AdGroupExtensionSetting
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "AdGroupExtensionSetting";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

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

    public function __construct($adGroupId = null, $extensionType = null, $extensionSetting = null)
    {
        $this->adGroupId = $adGroupId;
        $this->extensionType = $extensionType;
        $this->extensionSetting = $extensionSetting;
    }
}
