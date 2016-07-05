<?php


/**
 * Status in the AccountUserListStatus table. This indicates if the user list share or
 * the licensing of the userlist is still active.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AccountUserListStatus
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "AccountUserListStatus";

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