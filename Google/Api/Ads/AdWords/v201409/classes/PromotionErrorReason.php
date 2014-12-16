<?php



  /**
   * Reason behind the {@code PromotionError}.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class PromotionErrorReason {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
    const XSI_TYPE = "PromotionError.Reason";

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

    public function __construct() {
    }

  }