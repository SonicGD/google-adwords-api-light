<?php


/**
 * Status in the AccountUserListStatus table. This indicates if the user list share or
 * the licensing of the userlist is still active.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AccountUserListStatus
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201402";
    const XSI_TYPE = "AccountUserListStatus";

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
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