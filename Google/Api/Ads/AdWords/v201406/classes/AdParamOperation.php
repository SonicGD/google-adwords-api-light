<?php


  /**
   * Represents an operation on an {@link AdParam}. The supported operators
   * are {@code SET} and {@code REMOVE}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdParamOperation extends Operation
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdParamOperation";

    /**
     * @access public
     * @var AdParam
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
      parent::__construct();
      $this->operand = $operand;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
