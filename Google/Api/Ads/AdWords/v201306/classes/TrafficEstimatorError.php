<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Base error class for
 * {@link com.google.ads.api.services.trafficestimator.TrafficEstimatorService}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TrafficEstimatorError extends ApiError
{
    /**
     * @access public
     * @var tnsTrafficEstimatorErrorReason
     */
    public $reason;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201306";
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