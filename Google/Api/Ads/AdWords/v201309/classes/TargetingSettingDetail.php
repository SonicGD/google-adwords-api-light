<?php


/**
 * Specifies if criteria of this type group should be used to restrict
 * targeting, or if ads can serve anywhere and criteria are only used in
 * determining the bid.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TargetingSettingDetail
{
    /**
     * @access public
     * @var tnsCriterionTypeGroup
     */
    public $criterionTypeGroup;

    /**
     * @access public
     * @var boolean
     */
    public $targetAll;

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
        return "TargetingSettingDetail";
    }

    public function __construct($criterionTypeGroup = null, $targetAll = null)
    {
        $this->criterionTypeGroup = $criterionTypeGroup;
        $this->targetAll = $targetAll;
    }
}