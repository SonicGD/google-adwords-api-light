<?php


/**
 * Holds information about a changed adgroup
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupChangeData
{
    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var tnsChangeStatus
     */
    public $adGroupChangeStatus;

    /**
     * @access public
     * @var integer[]
     */
    public $changedAds;

    /**
     * @access public
     * @var integer[]
     */
    public $changedCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $changedAdGroupBidModifierCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $deletedAdGroupBidModifierCriteria;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/ch/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "AdGroupChangeData";
    }

    public function __construct(
        $adGroupId = null,
        $adGroupChangeStatus = null,
        $changedAds = null,
        $changedCriteria = null,
        $deletedCriteria = null,
        $changedFeeds = null,
        $deletedFeeds = null,
        $changedAdGroupBidModifierCriteria = null,
        $deletedAdGroupBidModifierCriteria = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->adGroupChangeStatus = $adGroupChangeStatus;
        $this->changedAds = $changedAds;
        $this->changedCriteria = $changedCriteria;
        $this->deletedCriteria = $deletedCriteria;
        $this->changedFeeds = $changedFeeds;
        $this->deletedFeeds = $deletedFeeds;
        $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
        $this->deletedAdGroupBidModifierCriteria = $deletedAdGroupBidModifierCriteria;
    }
}