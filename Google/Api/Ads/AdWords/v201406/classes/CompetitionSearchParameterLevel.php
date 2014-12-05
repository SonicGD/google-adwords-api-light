<?php


  /**
   * An enumeration of possible values to be used in conjunction with the
   * {@link CompetitionSearchParameter} to specify the granularity of
   * competition to be filtered.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CompetitionSearchParameterLevel
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
      const XSI_TYPE = "CompetitionSearchParameter.Level";

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
