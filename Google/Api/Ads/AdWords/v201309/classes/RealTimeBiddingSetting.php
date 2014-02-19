<?php


/**
 * Settings for Real-Time Bidding, a feature only available for campaigns
 * targeting the Ad Exchange network.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class RealTimeBiddingSetting extends Setting
{
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
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "RealTimeBiddingSetting";
    }

    public function __construct($optIn = null, $SettingType = null)
    {
        parent::__construct();
        $this->optIn = $optIn;
        $this->SettingType = $SettingType;
    }
}