<?php


/**
 * Returns all the open/active BillingAccounts associated with the current
 * manager.
 * @return A list of {@link BillingAccount}s.
 * @throws ApiException
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class GetBillingAccounts
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201605";
    const XSI_TYPE = "";

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct()
    {
    }

}