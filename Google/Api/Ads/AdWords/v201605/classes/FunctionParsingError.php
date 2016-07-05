<?php


/**
 * An error resulting from a failure to parse the textual representation of a function.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class FunctionParsingError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "FunctionParsingError";

    /**
     * @access public
     * @var tnsFunctionParsingErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $offendingText;

    /**
     * @access public
     * @var integer
     */
    public $offendingTextIndex;

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
        $offendingText = null,
        $offendingTextIndex = null,
        $fieldPath = null,
        $trigger = null,
        $errorString = null,
        $ApiErrorType = null
    ) {
        parent::__construct();
        $this->reason = $reason;
        $this->offendingText = $offendingText;
        $this->offendingTextIndex = $offendingTextIndex;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }

}