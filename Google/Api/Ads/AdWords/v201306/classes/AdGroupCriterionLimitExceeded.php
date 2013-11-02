<?php



/**
 * Signals that too many criteria were added to some ad group.
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded
{
    /**
     * @access public
     * @var tnsAdGroupCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;

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
        return "AdGroupCriterionLimitExceeded";
    }

    public function __construct(
        $limitType = null,
        $reason = null,
        $enclosingId = null,
        $limit = null,
        $accountLimitType = null,
        $existingCount = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->limitType = $limitType;
        $this->reason = $reason;
        $this->enclosingId = $enclosingId;
        $this->limit = $limit;
        $this->accountLimitType = $accountLimitType;
        $this->existingCount = $existingCount;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}