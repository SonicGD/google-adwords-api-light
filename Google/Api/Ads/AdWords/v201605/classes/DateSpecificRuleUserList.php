<?php


/**
 * Visitors of a page during specific dates. The visiting periods are defined as follows:
 * <ul>
 * <li> between {@code startDate} (inclusive) and {@code endDate} (inclusive);
 * <li> before {@code endDate} (exclusive) with {@code startDate} = 2000-01-01;
 * <li> after {@code startDate} (exclusive) with {@code endDate} = 2037-12-30.
 * </ul>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DateSpecificRuleUserList extends RuleBasedUserList
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "DateSpecificRuleUserList";

    /**
     * @access public
     * @var Rule
     */
    public $rule;

    /**
     * @access public
     * @var string
     */
    public $startDate;

    /**
     * @access public
     * @var string
     */
    public $endDate;

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

    public function __construct($rule = null, $startDate = null, $endDate = null)
    {
        parent::__construct();
        $this->rule = $rule;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

}