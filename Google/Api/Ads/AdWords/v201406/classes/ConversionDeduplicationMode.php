<?php


  /**
   * Conversion deduplication mode for Conversion Optimizer. That is, whether to
   * optimize for number of clicks that get at least one conversion, or total number
   * of conversions per click.
   *
   *
   *
   * Errors returned when Authentication failed.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ConversionDeduplicationMode
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "ConversionDeduplicationMode";

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

      public function __construct()
      {
      }
  }
