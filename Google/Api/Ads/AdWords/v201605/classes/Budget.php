<?php


/**
 * Budgets are used for managing the amount of money spent on AdWords.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Budget
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Budget";

    /**
     * @access public
     * @var integer
     */
    public $budgetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var Money
     */
    public $amount;

    /**
     * @access public
     * @var tnsBudgetBudgetDeliveryMethod
     */
    public $deliveryMethod;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var boolean
     */
    public $isExplicitlyShared;

    /**
     * @access public
     * @var tnsBudgetBudgetStatus
     */
    public $status;

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

    public function __construct(
        $budgetId = null,
        $name = null,
        $amount = null,
        $deliveryMethod = null,
        $referenceCount = null,
        $isExplicitlyShared = null,
        $status = null
    ) {
        $this->budgetId = $budgetId;
        $this->name = $name;
        $this->amount = $amount;
        $this->deliveryMethod = $deliveryMethod;
        $this->referenceCount = $referenceCount;
        $this->isExplicitlyShared = $isExplicitlyShared;
        $this->status = $status;
    }

}