<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents data about a bidlandscape for an adgroup.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupBidLandscape extends BidLandscape
{
    /**
     * @access public
     * @var tnsAdGroupBidLandscapeType
     */
    public $type;

    /**
     * @access public
     * @var boolean
     */
    public $landscapeCurrent;

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
        return "AdGroupBidLandscape";
    }

    public function __construct(
        $type = null,
        $landscapeCurrent = null,
        $campaignId = null,
        $adGroupId = null,
        $startDate = null,
        $endDate = null,
        $landscapePoints = null,
        $DataEntryType = null
    ) {
        parent::__construct();
        $this->type = $type;
        $this->landscapeCurrent = $landscapeCurrent;
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->landscapePoints = $landscapePoints;
        $this->DataEntryType = $DataEntryType;
    }
}