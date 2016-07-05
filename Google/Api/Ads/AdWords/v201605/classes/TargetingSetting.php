<?php


/**
 * Setting for targeting related features.
 * This is applicable at Campaign and AdGroup level.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TargetingSetting extends Setting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TargetingSetting";

    /**
     * @access public
     * @var TargetingSettingDetail[]
     */
    public $details;

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

    public function __construct($details = null, $SettingType = null)
    {
        parent::__construct();
        $this->details = $details;
        $this->SettingType = $SettingType;
    }

}