<?php


  /**
   * The result of a call to FeedService#mutate.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class FeedReturnValue extends ListReturnValue
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "FeedReturnValue";

    /**
     * @access public
     * @var Feed[]
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
