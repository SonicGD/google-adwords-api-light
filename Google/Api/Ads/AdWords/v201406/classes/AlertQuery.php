<?php


  /**
   * Querying criteria for getting alerts.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AlertQuery
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
      const XSI_TYPE = "AlertQuery";

    /**
     * @access public
     * @var tnsClientSpec
     */
    public $clientSpec;

    /**
     * @access public
     * @var tnsFilterSpec
     */
    public $filterSpec;

    /**
     * @access public
     * @var tnsAlertType[]
     */
    public $types;

    /**
     * @access public
     * @var tnsAlertSeverity[]
     */
    public $severities;

    /**
     * @access public
     * @var tnsTriggerTimeSpec
     */
    public $triggerTimeSpec;

    /**
     * @access public
     * @var string
     */
    public $triggerTime;

    /**
     * @access public
     * @var integer[]
     */
    public $clientCustomerIds;

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

      public function __construct($clientSpec = null, $filterSpec = null, $types = null, $severities = null, $triggerTimeSpec = null, $triggerTime = null, $clientCustomerIds = null)
      {
          $this->clientSpec = $clientSpec;
          $this->filterSpec = $filterSpec;
          $this->types = $types;
          $this->severities = $severities;
          $this->triggerTimeSpec = $triggerTimeSpec;
          $this->triggerTime = $triggerTime;
          $this->clientCustomerIds = $clientCustomerIds;
      }
  }
