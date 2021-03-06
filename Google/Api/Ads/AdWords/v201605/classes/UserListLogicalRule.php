<?php


/**
 * A user list logical rule. A rule has a logical operator (and/or/not) and a
 * list of operands that can be user lists or user interests.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class UserListLogicalRule
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "UserListLogicalRule";

    /**
     * @access public
     * @var tnsUserListLogicalRuleOperator
     */
    public $operator;

    /**
     * @access public
     * @var LogicalUserListOperand[]
     */
    public $ruleOperands;

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

    public function __construct($operator = null, $ruleOperands = null)
    {
        $this->operator = $operator;
        $this->ruleOperands = $ruleOperands;
    }

}