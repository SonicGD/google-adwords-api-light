<?php



  /**
   * A selector used to fetch geographic coordinates for given addresses.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class GeoLocationSelector {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "GeoLocationSelector";

    /**
     * @access public
     * @var Address[]
     */
    public $addresses;

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

    public function __construct($addresses = null) {
      $this->addresses = $addresses;
    }

  }