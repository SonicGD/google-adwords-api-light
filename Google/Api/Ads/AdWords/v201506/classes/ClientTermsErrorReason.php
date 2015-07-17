<?php


/**
 * Enums for the various reasons an error can be thrown as a result of
 * ClientTerms violation.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class ClientTermsErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "ClientTermsError.Reason";

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