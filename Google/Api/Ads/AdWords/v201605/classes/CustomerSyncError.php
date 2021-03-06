<?php


/**
 * Represents CustomerSyncService specific errors
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerSyncError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201605";
    const XSI_TYPE = "CustomerSyncError";

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