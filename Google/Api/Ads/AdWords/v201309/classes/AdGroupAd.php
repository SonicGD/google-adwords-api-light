<?php


/**
 * Represents an ad in an ad group.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAd
{
    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var Ad
     */
    public $ad;

    /**
     * @access public
     * @var AdGroupAdExperimentData
     */
    public $experimentData;

    /**
     * @access public
     * @var tnsAdGroupAdStatus
     */
    public $status;

    /**
     * @access public
     * @var tnsAdGroupAdApprovalStatus
     */
    public $approvalStatus;

    /**
     * @access public
     * @var string[]
     */
    public $disapprovalReasons;

    /**
     * @access public
     * @var boolean
     */
    public $trademarkDisapproved;

    /**
     * @access public
     * @var String_StringMapEntry[]
     */
    public $forwardCompatibilityMap;

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
        return "AdGroupAd";
    }

    public function __construct(
        $adGroupId = null,
        $ad = null,
        $experimentData = null,
        $status = null,
        $approvalStatus = null,
        $disapprovalReasons = null,
        $trademarkDisapproved = null,
        $forwardCompatibilityMap = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->ad = $ad;
        $this->experimentData = $experimentData;
        $this->status = $status;
        $this->approvalStatus = $approvalStatus;
        $this->disapprovalReasons = $disapprovalReasons;
        $this->trademarkDisapproved = $trademarkDisapproved;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    }
}