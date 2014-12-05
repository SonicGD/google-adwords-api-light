<?php


  /**
   * Represents a page of {@link AdGroupAd}s resulting from the query done by
   * {@link AdGroupAdService}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdPage extends Page
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "AdGroupAdPage";

    /**
     * @access public
     * @var AdGroupAd[]
     */
    public $entries;

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

      public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
      {
          parent::__construct();
          $this->entries = $entries;
          $this->totalNumEntries = $totalNumEntries;
          $this->PageType = $PageType;
      }
  }
