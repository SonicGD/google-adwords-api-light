<?php


  /**
   * Selector for querying for alerts.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AlertSelector
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "AlertSelector";

    /**
     * @access public
     * @var AlertQuery
     */
    public $query;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

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

    public function __construct($query = null, $paging = null)
    {
      $this->query = $query;
      $this->paging = $paging;
    }

  }
