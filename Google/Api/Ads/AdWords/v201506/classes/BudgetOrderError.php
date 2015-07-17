<?php


/**
 * Error information for BudgetOrderService.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class BudgetOrderError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201506";
    const XSI_TYPE = "BudgetOrderError";

    /**
     * @access public
     * @var tnsBudgetOrderErrorReason
     */
    public $reason;

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
        $reason = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->reason = $reason;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }

}