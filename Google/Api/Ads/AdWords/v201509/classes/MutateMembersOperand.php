<?php


/**
 * Operand containing user list id and members to be added or removed.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class MutateMembersOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201509";
    const XSI_TYPE = "MutateMembersOperand";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var tnsMutateMembersOperandDataType
     */
    public $dataType;

    /**
     * @access public
     * @var string[]
     */
    public $members;

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

    public function __construct($userListId = null, $dataType = null, $members = null)
    {
        $this->userListId = $userListId;
        $this->dataType = $dataType;
        $this->members = $members;
    }

}