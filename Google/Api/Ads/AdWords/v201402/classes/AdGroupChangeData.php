<?php


/**
 * Holds information about a changed adgroup
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupChangeData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201402";
    const XSI_TYPE = "AdGroupChangeData";

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