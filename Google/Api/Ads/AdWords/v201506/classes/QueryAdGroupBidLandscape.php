<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of {@link AdGroupBidLandscape}s for the ad groups that match the query. In the
 * result, the returned {@link LandscapePoint}s are grouped into {@link AdGroupBidLandscape}s
 * by their ad groups, and numberResults of paging limits the total number of
 * {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
 *
 * @param query The SQL-like AWQL query string.
 * @return A list of bid landscapes.
 * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class QueryAdGroupBidLandscape
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

    public function __construct($query = null)
    {
        $this->query = $query;
    }

}