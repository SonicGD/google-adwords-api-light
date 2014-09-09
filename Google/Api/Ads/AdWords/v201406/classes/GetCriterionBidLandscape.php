<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of {@link CriterionBidLandscape}s for the criteria specified in the selector.
   * In the result, the returned {@link LandscapePoint}s are grouped into
   * {@link CriterionBidLandscape}s by their criteria, and numberResults of paging limits the total
   * number of {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
   *
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetCriterionBidLandscape
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
      $this->serviceSelector = $serviceSelector;
    }

  }
