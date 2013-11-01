<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents CustomerSyncService specific errors
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncError extends ApiError
{
    /**
     * @access public
     * @var tnsCustomerSyncErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/ch/v201306";
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
        $campaignId = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->reason = $reason;
        $this->campaignId = $campaignId;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}