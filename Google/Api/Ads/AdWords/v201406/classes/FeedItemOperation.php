<?php


  /**
   * FeedItem service mutate operation.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedItemOperation extends Operation
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "FeedItemOperation";

    /**
     * @access public
     * @var FeedItem
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
