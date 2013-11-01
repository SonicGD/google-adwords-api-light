<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents an ad in an ad group.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
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
     * @var boolean
     */
    public $trademarkDisapproved;

    /**
     * @access public
     * @var AdStats
     */
    public $stats;

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

    public function __construct(
        $adGroupId = null,
        $ad = null,
        $experimentData = null,
        $status = null,
        $approvalStatus = null,
        $trademarkDisapproved = null,
        $stats = null,
        $forwardCompatibilityMap = null
    ) {
        $this->adGroupId = $adGroupId;
        $this->ad = $ad;
        $this->experimentData = $experimentData;
        $this->status = $status;
        $this->approvalStatus = $approvalStatus;
        $this->trademarkDisapproved = $trademarkDisapproved;
        $this->stats = $stats;
        $this->forwardCompatibilityMap = $forwardCompatibilityMap;
    }
}