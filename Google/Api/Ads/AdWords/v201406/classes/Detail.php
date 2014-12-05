<?php


  /**
   * Detail refers to a single event or condition that triggered its owning {@link Alert}.
   * Multiple details can cause the same {@code Alert} to occur.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Detail
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
      const XSI_TYPE = "Detail";

    /**
     * @access public
     * @var string
     */
    public $triggerTime;

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

      public function __construct($triggerTime = null)
      {
          $this->triggerTime = $triggerTime;
      }
  }
