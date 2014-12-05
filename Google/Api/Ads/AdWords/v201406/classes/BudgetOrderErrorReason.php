<?php


  /**
   * The request contains a field that is only available if the manager account
   * is whitelisted for new billing backend.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetOrderErrorReason
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201406";
      const XSI_TYPE = "BudgetOrderError.Reason";

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
