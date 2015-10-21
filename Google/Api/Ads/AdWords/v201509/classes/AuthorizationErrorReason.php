<?php


/**
 * The reasons for the database error.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AuthorizationErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AuthorizationError.Reason";

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