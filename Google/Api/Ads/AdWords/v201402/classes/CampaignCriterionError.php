<?php



/**
 * Base error class for Campaign Criterion Service.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CampaignCriterionError extends ApiError {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "CampaignCriterionError";

  /**
   * @access public
   * @var tnsCampaignCriterionErrorReason
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