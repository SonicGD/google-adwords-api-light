<?php


/**
 * Enums for all the reasons an error can be thrown to the user during a CustomerOrderLine mutate
 * operation.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class CustomerOrderLineErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201506";
    const XSI_TYPE = "CustomerOrderLineError.Reason";

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