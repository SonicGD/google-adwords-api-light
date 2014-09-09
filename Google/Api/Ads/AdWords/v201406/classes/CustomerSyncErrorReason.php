<?php


  /**
   * The request attempted to access a campaign that either does not
   * exist or belongs to a different account.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CustomerSyncErrorReason
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201406";
    const XSI_TYPE = "CustomerSyncError.Reason";

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
