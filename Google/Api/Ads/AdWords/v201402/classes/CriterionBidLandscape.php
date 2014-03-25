<?php


/**
 * The bid landscape for a criterion.  A bid landscape estimates how a
 * a criterion will perform based on different bid amounts.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CriterionBidLandscape extends BidLandscape
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "CriterionBidLandscape";

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

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
        $criterionId = null,
        $campaignId = null,
        $adGroupId = null,
        $startDate = null,
        $endDate = null,
        $landscapePoints = null
    ) {
        parent::__construct();
        $this->criterionId = $criterionId;
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->landscapePoints = $landscapePoints;
    }
}