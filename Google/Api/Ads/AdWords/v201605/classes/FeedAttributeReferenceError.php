<?php


/**
 * An error indicating a problem with a reference to a feed attribute in an ad.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class FeedAttributeReferenceError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "FeedAttributeReferenceError";

    /**
     * @access public
     * @var tnsFeedAttributeReferenceErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $feedName;

    /**
     * @access public
     * @var string
     */
    public $feedAttributeName;

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
        $feedName = null,
        $feedAttributeName = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->reason = $reason;
        $this->feedName = $feedName;
        $this->feedAttributeName = $feedAttributeName;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }

}