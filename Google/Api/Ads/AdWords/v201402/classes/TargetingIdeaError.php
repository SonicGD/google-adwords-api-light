<?php



/**
 * Base error class for the
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaService}.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class TargetingIdeaError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "TargetingIdeaError";

  /**
   * @access public
   * @var tnsTargetingIdeaErrorReason
   */
  public $reason;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($reason = null, $fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null) {
    parent::__construct();
    $this->reason = $reason;
    $this->fieldPath = $fieldPath;
    $this->trigger = $trigger;
    $this->errorString = $errorString;
    $this->ApiErrorType = $ApiErrorType;
  }
}