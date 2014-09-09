<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OrderBy
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "OrderBy";

    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsSortOrder
     */
    public $sortOrder;

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

    public function __construct($field = null, $sortOrder = null)
    {
      $this->field = $field;
      $this->sortOrder = $sortOrder;
    }

  }
