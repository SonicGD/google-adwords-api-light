<?php


/**
 * Settings for the
 * <a href="//support.google.com/adwords/answer/190596">Display Campaign Optimizer</a>,
 * initially termed "Explorer".
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ExplorerAutoOptimizerSetting extends Setting
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ExplorerAutoOptimizerSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

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

    public function __construct($optIn = null, $SettingType = null)
    {
        parent::__construct();
        $this->optIn = $optIn;
        $this->SettingType = $SettingType;
    }
}
