<?php



  /**
   * Represents a feed attribute reference to use in a function.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class FeedAttributeOperand extends FunctionArgumentOperand {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "FeedAttributeOperand";

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $feedAttributeId;

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

    public function __construct($feedId = null, $feedAttributeId = null, $FunctionArgumentOperandType = null) {
      parent::__construct();
      $this->feedId = $feedId;
      $this->feedAttributeId = $feedAttributeId;
      $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

  }