<?php



  /**
   * A container for return values from the ManagedCustomerService.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ManagedCustomerReturnValue {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
    const XSI_TYPE = "ManagedCustomerReturnValue";

    /**
     * @access public
     * @var ManagedCustomer[]
     */
    public $value;

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

    public function __construct($value = null) {
      $this->value = $value;
    }

  }