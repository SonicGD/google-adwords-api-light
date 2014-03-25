<?php


/**
 * A list of all the error codes being used by the common budget domain package.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class BudgetError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "BudgetError";

    /**
     * @access public
     * @var tnsBudgetErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
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