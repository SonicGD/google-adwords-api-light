<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents errors thrown by the {@link LocationCriterionService#get} operation.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationCriterionServiceError extends ApiError
{
    /**
     * @access public
     * @var tnsLocationCriterionServiceErrorReason
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
        return "";
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