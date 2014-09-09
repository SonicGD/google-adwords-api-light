<?php


  /**
   * Selector for getPendingInvitations method.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PendingInvitationSelector
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "PendingInvitationSelector";

    /**
     * @access public
     * @var integer[]
     */
    public $managerCustomerIds;

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

    public function __construct($managerCustomerIds = null, $clientCustomerIds = null)
    {
      $this->managerCustomerIds = $managerCustomerIds;
      $this->clientCustomerIds = $clientCustomerIds;
    }

  }
