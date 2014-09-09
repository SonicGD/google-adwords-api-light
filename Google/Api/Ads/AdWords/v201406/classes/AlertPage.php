<?php


  /**
   * Contains a subset of {@link Alert}s resulting from the filtering and paging,
   * returned by {@link AlertService#get(AlertSelector)}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AlertPage extends NoStatsPage
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "AlertPage";

    /**
     * @access public
     * @var Alert[]
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

    public function __construct($entries = null)
    {
      parent::__construct();
      $this->entries = $entries;
    }

  }
