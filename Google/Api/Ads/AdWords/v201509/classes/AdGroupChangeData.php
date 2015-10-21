<?php


/**
 * Holds information about a changed adgroup
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupChangeData
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201509";
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
    public $removedCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $changedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $removedFeeds;

    /**
     * @access public
     * @var integer[]
     */
    public $changedAdGroupBidModifierCriteria;

    /**
     * @access public
     * @var integer[]
     */
    public $removedAdGroupBidModifierCriteria;

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

    public function __construct(
        $adGroupId = null,
        $adGroupChangeStatus = null,
        $changedAds = null,
        $changedCriteria = null,
        $removedCriteria = null,
        $changedFeeds = null,
        $removedFeeds = null,
        $changedAdGroupBidModifierCriteria = null,
        $removedAdGroupBidModifierCriteria = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->adGroupChangeStatus = $adGroupChangeStatus;
        $this->changedAds = $changedAds;
        $this->changedCriteria = $changedCriteria;
        $this->removedCriteria = $removedCriteria;
        $this->changedFeeds = $changedFeeds;
        $this->removedFeeds = $removedFeeds;
        $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
        $this->removedAdGroupBidModifierCriteria = $removedAdGroupBidModifierCriteria;
    }

}