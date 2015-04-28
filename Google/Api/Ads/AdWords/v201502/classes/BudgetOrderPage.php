<?php


/**
 * A page of {@link BudgetOrder}s from {@link BudgetOrderService#get}
 * method.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class BudgetOrderPage extends Page
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201502";
    const XSI_TYPE = "BudgetOrderPage";

    /**
     * @access public
     * @var BudgetOrder[]
     */
    public $entries;

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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}
