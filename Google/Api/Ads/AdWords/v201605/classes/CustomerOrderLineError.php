<?php


/**
 * Error information returned for CustomerOrderLineService.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerOrderLineError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201605";
    const XSI_TYPE = "CustomerOrderLineError";

    /**
     * @access public
     * @var tnsCustomerOrderLineErrorReason
     */
    public $reason;

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