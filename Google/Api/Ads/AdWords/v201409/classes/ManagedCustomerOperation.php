<?php



  /**
   * An operation on a managed customer.
   * <p class="note"><b>Note:</b> only <code>ADD</code> operator is supported.</p>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ManagedCustomerOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201409";
    const XSI_TYPE = "ManagedCustomerOperation";

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null) {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }