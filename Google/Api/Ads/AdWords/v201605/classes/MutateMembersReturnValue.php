<?php


/**
 * A container for return value from {@code UserListService#mutateMembers}
 * method.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class MutateMembersReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "MutateMembersReturnValue";

    /**
     * @access public
     * @var UserList[]
     */
    public $userLists;

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

    public function __construct($userLists = null)
    {
        $this->userLists = $userLists;
    }

}