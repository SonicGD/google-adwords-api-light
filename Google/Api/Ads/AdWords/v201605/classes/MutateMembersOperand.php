<?php


/**
 * Operand containing user list id and members to be added or removed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class MutateMembersOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
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

    public function __construct($userListId = null, $dataType = null, $members = null)
    {
        $this->userListId = $userListId;
        $this->dataType = $dataType;
        $this->members = $members;
    }

}