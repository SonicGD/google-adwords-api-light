<?php


/**
 * A set of estimates for a criterion's performance for a specific bid
 * amount.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class BidLandscapeLandscapePoint
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "BidLandscape.LandscapePoint";

    /**
     * @access public
     * @var Money
     */
    public $bid;

    /**
     * @access public
     * @var integer
     */
    public $clicks;

    /**
     * @access public
     * @var Money
     */
    public $cost;

    /**
     * @access public
     * @var integer
     */
    public $impressions;

    /**
     * @access public
     * @var integer
     */
    public $promotedImpressions;

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
        $bid = null,
        $clicks = null,
        $cost = null,
        $impressions = null,
        $promotedImpressions = null
    ) {
        $this->bid = $bid;
        $this->clicks = $clicks;
        $this->cost = $cost;
        $this->impressions = $impressions;
        $this->promotedImpressions = $promotedImpressions;
    }

}