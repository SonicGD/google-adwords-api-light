<?php


/**
 * A list of all errors associated with the Range constraint.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class RangeError extends ApiError
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "RangeError";

    /**
     * @access public
     * @var tnsRangeErrorReason
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
