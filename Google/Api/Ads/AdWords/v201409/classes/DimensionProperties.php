<?php



  /**
   * Top level class for Dimensions.
   * 
   * 
   * 
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class DimensionProperties extends DataEntry {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "DimensionProperties";

    /**
     * @access public
     * @var LevelOfDetail
     */
    public $levelOfDetail;

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

    public function __construct($levelOfDetail = null, $DataEntryType = null) {
      parent::__construct();
      $this->levelOfDetail = $levelOfDetail;
      $this->DataEntryType = $DataEntryType;
    }

  }