<?php


  /**
   * A typed {@link Operation} class that uses an instance of {@link ExpressBusiness} as its operand.
   *
   * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
   * supported. To remove an {@link ExpressBusiness}, set its {@link ExpressBusiness#status status}
   * to <code>DELETED</code>.</p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExpressBusinessOperation extends Operation
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201406";
      const XSI_TYPE = "ExpressBusinessOperation";

    /**
     * @access public
     * @var ExpressBusiness
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
