<?php


  /**
   * This operand specifies a place of interest category for semantic targeting.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PlacesOfInterestOperand extends FunctionArgumentOperand
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "PlacesOfInterestOperand";

    /**
     * @access public
     * @var tnsPlacesOfInterestOperandCategory
     */
    public $category;

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

      public function __construct($category = null, $FunctionArgumentOperandType = null)
      {
          parent::__construct();
          $this->category = $category;
          $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
      }
  }
