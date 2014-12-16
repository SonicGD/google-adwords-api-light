<?php



  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of FeedMappings that meet the selector criteria.
   * 
   * @param selector Determines which FeedMappings to return. If empty all
   * FeedMappings are returned.
   * @return The list of FeedMappings.
   * @throws ApiException indicates a problem with the request.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedMappingServiceGet {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

    public function __construct($selector = null) {
      $this->selector = $selector;
    }

  }