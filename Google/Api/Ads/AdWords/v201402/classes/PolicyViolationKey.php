<?php



/**
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * 
 * 
 * 
 * Represents data about a bidlandscape for an adgroup.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class PolicyViolationKey {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "PolicyViolationKey";

  /**
   * @access public
   * @var string
   */
  public $policyName;

  /**
   * @access public
   * @var string
   */
  public $violatingText;

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

  public function __construct($policyName = null, $violatingText = null) {
    $this->policyName = $policyName;
    $this->violatingText = $violatingText;
  }
}