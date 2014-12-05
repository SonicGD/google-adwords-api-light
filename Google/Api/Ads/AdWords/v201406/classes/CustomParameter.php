<?php


  /**
   * CustomParameter is used to map a custom parameter key to its value.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CustomParameter
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "CustomParameter";

    /**
     * @access public
     * @var string
     */
    public $key;

    /**
     * @access public
     * @var string
     */
    public $value;

    /**
     * @access public
     * @var boolean
     */
    public $isRemove;

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

      public function __construct($key = null, $value = null, $isRemove = null)
      {
          $this->key = $key;
          $this->value = $value;
          $this->isRemove = $isRemove;
      }
  }
