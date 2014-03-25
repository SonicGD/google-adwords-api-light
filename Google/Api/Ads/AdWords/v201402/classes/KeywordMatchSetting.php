<?php


/**
 * Improved exact and phrase match option includes misspellings, plurals,
 * and other close variants of your keywords.
 *
 * Default value set to {@code true} to include close variants. For more
 * information, see the article
 * <a href="https://support.google.com/adwords/bin/answer.py?answer=6100">
 * What are keyword matching options?</a>.
 *
 * This setting is required when creating new campaigns.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class KeywordMatchSetting extends Setting
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "KeywordMatchSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
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