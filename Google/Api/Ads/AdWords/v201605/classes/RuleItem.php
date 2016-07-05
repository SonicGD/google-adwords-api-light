<?php


/**
 * An atomic rule fragment.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class RuleItem
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "RuleItem";

    /**
     * @access public
     * @var DateRuleItem
     */
    public $DateRuleItem;

    /**
     * @access public
     * @var NumberRuleItem
     */
    public $NumberRuleItem;

    /**
     * @access public
     * @var StringRuleItem
     */
    public $StringRuleItem;

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

    public function __construct($DateRuleItem = null, $NumberRuleItem = null, $StringRuleItem = null)
    {
        $this->DateRuleItem = $DateRuleItem;
        $this->NumberRuleItem = $NumberRuleItem;
        $this->StringRuleItem = $StringRuleItem;
    }

}