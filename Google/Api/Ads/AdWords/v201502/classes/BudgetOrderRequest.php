<?php


/**
 * Holds fields that provide information on the last set of values that were passed in through
 * the parent BudgetOrder for mutate.add and mutate.set.
 * <span class="constraint Billing">This element only applies if manager account is whitelisted for new billing backend.</span>
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class BudgetOrderRequest
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201502";
    const XSI_TYPE = "BudgetOrderRequest";

    /**
     * @access public
     * @var tnsBudgetOrderRequestStatus
     */
    public $status;

    /**
     * @access public
     * @var string
     */
    public $date;

    /**
     * @access public
     * @var string
     */
    public $billingAccountName;

    /**
     * @access public
     * @var string
     */
    public $poNumber;

    /**
     * @access public
     * @var string
     */
    public $budgetOrderName;

    /**
     * @access public
     * @var Money
     */
    public $spendingLimit;

    /**
     * @access public
     * @var string
     */
    public $startDateTime;

    /**
     * @access public
     * @var string
     */
    public $endDateTime;

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

    public function __construct(
        $status = null,
        $date = null,
        $billingAccountName = null,
        $poNumber = null,
        $budgetOrderName = null,
        $spendingLimit = null,
        $startDateTime = null,
        $endDateTime = null
    ) {
        $this->status = $status;
        $this->date = $date;
        $this->billingAccountName = $billingAccountName;
        $this->poNumber = $poNumber;
        $this->budgetOrderName = $budgetOrderName;
        $this->spendingLimit = $spendingLimit;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }
}
