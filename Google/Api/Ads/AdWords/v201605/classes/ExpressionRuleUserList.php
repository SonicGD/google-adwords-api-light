<?php


/**
 * Visitors of a page. The page visit is defined by one boolean rule expression.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ExpressionRuleUserList extends RuleBasedUserList
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "ExpressionRuleUserList";

    /**
     * @access public
     * @var Rule
     */
    public $rule;

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

    public function __construct($rule = null)
    {
        parent::__construct();
        $this->rule = $rule;
    }

}