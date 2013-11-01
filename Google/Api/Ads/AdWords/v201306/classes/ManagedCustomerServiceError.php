<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Error for {@link ManagedCustomerService}
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerServiceError extends ApiError
{
    /**
     * @access public
     * @var tnsManagedCustomerServiceErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer[]
     */
    public $customerIds;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201306";
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
        $customerIds = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->reason = $reason;
        $this->customerIds = $customerIds;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}