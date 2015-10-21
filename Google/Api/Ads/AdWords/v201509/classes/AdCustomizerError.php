<?php


/**
 * An error indicating a problem with an ad customizer tag.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdCustomizerError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdCustomizerError";

    /**
     * @access public
     * @var tnsAdCustomizerErrorReason
     */
    public $reason;

    /**
     * @access public
     * @var string
     */
    public $functionString;

    /**
     * @access public
     * @var string
     */
    public $operatorName;

    /**
     * @access public
     * @var integer
     */
    public $operandIndex;

    /**
     * @access public
     * @var string
     */
    public $operandValue;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($reason = null, $functionString = null, $operatorName = null, $operandIndex = null, $operandValue = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
        parent::__construct();
        $this->reason = $reason;
        $this->functionString = $functionString;
        $this->operatorName = $operatorName;
        $this->operandIndex = $operandIndex;
        $this->operandValue = $operandValue;
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }

}