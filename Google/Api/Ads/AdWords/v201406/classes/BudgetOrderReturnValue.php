<?php


  /**
   * A container for return values from the {@link BudgetOrderService#mutate}
   * method.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BudgetOrderReturnValue extends ListReturnValue
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201406";
      const XSI_TYPE = "BudgetOrderReturnValue";

    /**
     * @access public
     * @var BudgetOrder[]
     */
    public $value;

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

      public function __construct($value = null, $ListReturnValueType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->ListReturnValueType = $ListReturnValueType;
      }
  }
