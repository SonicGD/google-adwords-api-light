<?php



  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class CampaignSharedSetOperation extends Operation {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "CampaignSharedSetOperation";

    /**
     * @access public
     * @var CampaignSharedSet
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