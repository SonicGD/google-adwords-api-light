<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Retrieves the budget suggestion for the specified criteria in the given selector based on
 * co-trigger data.
 * @param selector the selector specifying the budget suggestion to return
 * @return budget suggestion identified by the selector
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class BudgetSuggestionServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var BudgetSuggestionSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}