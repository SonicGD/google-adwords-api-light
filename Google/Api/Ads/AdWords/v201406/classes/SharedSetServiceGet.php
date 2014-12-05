<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of SharedSets based on the given selector.
   * @param selector the selector specifying the query
   * @return a list of SharedSet entities that meet the criterion specified
   * by the selector
   * @throws ApiException
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SharedSetServiceGet
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

      public function __construct($selector = null)
      {
          $this->selector = $selector;
      }
  }
