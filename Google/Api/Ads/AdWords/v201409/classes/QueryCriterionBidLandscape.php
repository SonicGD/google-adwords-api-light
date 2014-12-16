<?php



  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link CriterionBidLandscape}s for the criteria that match the query. In the
   * result, the returned {@link LandscapePoint}s are grouped into {@link CriterionBidLandscape}s
   * by their criteria, and numberResults of paging limits the total number of
   * {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of bid landscapes.
   * @throws ApiException if problems occur while parsing the query or fetching bid landscapes.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class QueryCriterionBidLandscape {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
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
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($query = null) {
      $this->query = $query;
    }

  }