<?php


/**
 * This indicates the way the entity such as UserList is related to a user.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AccessReason
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201502";
    const XSI_TYPE = "AccessReason";

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
