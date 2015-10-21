<?php


/**
 * A container for return value from {@code UserListService#mutateMembers}
 * method.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class MutateMembersReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";
    const XSI_TYPE = "MutateMembersReturnValue";

    /**
     * @access public
     * @var UserList[]
     */
    public $userLists;

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

    public function __construct($userLists = null)
    {
        $this->userLists = $userLists;
    }

}