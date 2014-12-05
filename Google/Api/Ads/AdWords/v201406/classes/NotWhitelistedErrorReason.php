<?php


  /**
   * The single reason for the whitelist error.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NotWhitelistedErrorReason
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "NotWhitelistedError.Reason";

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

      public function __construct()
      {
      }
  }
