<?php



  /**
   * A plain condition string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ProductLegacyCondition extends ProductDimension {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "ProductLegacyCondition";

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($value = null, $ProductDimensionType = null) {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }