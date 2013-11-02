<?php



/**
 * A list of all the error codes being used by the common budget domain package.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetError extends ApiError
{
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
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "BudgetError";
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