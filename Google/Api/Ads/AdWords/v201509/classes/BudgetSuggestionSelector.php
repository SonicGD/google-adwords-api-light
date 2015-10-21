<?php


/**
 * A selector for budget suggestion
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetSuggestionSelector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";
    const XSI_TYPE = "BudgetSuggestionSelector";

    /**
     * @access public
     * @var Criterion[]
     */
    public $criteria;

    /**
     * @access public
     * @var tnsCurrencyCode
     */
    public $currencyCode;

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

    public function __construct($criteria = null, $currencyCode = null)
    {
        $this->criteria = $criteria;
        $this->currencyCode = $currencyCode;
    }

}