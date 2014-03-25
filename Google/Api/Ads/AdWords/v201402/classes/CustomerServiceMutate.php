<?php



/**
 * Update an authorized customer. The only update currently provided is to enable or disable <a
 * href="https://support.google.com/analytics/answer/1033981?hl=en"> auto-tagging </a>; see that
 * link for special cases affecting the use of auto-tagging.
 * 
 * @param customer the requested updated value for the customer.
 * @throws ApiException
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CustomerServiceMutate {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Customer
   */
  public $customer;

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

  public function __construct($customer = null) {
    $this->customer = $customer;
  }
}