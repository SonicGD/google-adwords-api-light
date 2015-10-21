<?php


/**
 * Represents data about a bidlandscape for an adgroup.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupBidLandscape extends BidLandscape
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdGroupBidLandscape";

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

    public function __construct($type = null, $landscapeCurrent = null, $campaignId = null, $adGroupId = null, $startDate = null, $endDate = null, $landscapePoints = null)
    {
        parent::__construct();
        $this->type = $type;
        $this->landscapeCurrent = $landscapeCurrent;
        $this->campaignId = $campaignId;
        $this->adGroupId = $adGroupId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->landscapePoints = $landscapePoints;
    }

}