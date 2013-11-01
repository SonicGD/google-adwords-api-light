<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Setting for targeting related features.
 * This is applicable at Campaign and AdGroup level.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetingSetting extends Setting
{
    /**
     * @access public
     * @var TargetingSettingDetail[]
     */
    public $details;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($details = null, $SettingType = null)
    {
        parent::__construct();
        $this->details = $details;
        $this->SettingType = $SettingType;
    }
}