<?php


/**
 * Returns details of all the customers directly accessible by the user authenticating the call.
 * Callers are discouraged from setting the {@code clientCustomerId} header field in calls to
 * {@link CustomerService#getCustomers()}, as its value is ignored by this method, and its
 * presence will trigger an authorization error if the caller does not have access to the
 * customer with the included ID.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class GetCustomers
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
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