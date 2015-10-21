<?php


/**
 * An interface for a logical user list operand. A logical user list is a
 * combination of logical rules. Each rule is defined as a logical operator and
 * a list of operands. Those operands can be of type UserList.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LogicalUserListOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";
    const XSI_TYPE = "LogicalUserListOperand";

    /**
     * @access public
     * @var UserList
     */
    public $UserList;

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

    public function __construct($UserList = null)
    {
        $this->UserList = $UserList;
    }

}