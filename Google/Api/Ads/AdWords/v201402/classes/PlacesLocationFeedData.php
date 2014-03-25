<?php



/**
 * Data used to configure a location feed populated from
 * Google Places.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PlacesLocationFeedData extends SystemFeedGenerationData {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PlacesLocationFeedData";

  /**
   * @access public
   * @var OAuthInfo
   */
  public $oAuthInfo;

  /**
   * @access public
   * @var string
   */
  public $emailAddress;

  /**
   * @access public
   * @var string
   */
  public $businessNameFilter;

  /**
   * @access public
   * @var string[]
   */
  public $categoryFilters;

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

  public function __construct($oAuthInfo = null, $emailAddress = null, $businessNameFilter = null, $categoryFilters = null, $SystemFeedGenerationDataType = null) {
    parent::__construct();
    $this->oAuthInfo = $oAuthInfo;
    $this->emailAddress = $emailAddress;
    $this->businessNameFilter = $businessNameFilter;
    $this->categoryFilters = $categoryFilters;
    $this->SystemFeedGenerationDataType = $SystemFeedGenerationDataType;
  }
}