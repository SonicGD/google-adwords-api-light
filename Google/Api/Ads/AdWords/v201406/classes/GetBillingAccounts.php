<?php


  /**
   * Returns all the open/active BillingAccounts associated with the current
   * manager.
   * @return A list of {@link BillingAccount}s.
   * @throws ApiException
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetBillingAccounts
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201406";
      const XSI_TYPE = "";

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
