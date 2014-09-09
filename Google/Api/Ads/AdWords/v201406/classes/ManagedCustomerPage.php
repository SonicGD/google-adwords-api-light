<?php


  /**
   * Return result of {@link ManagedCustomerService}
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ManagedCustomerPage extends Page
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201406";
    const XSI_TYPE = "ManagedCustomerPage";

    /**
     * @access public
     * @var ManagedCustomer[]
     */
    public $entries;

    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

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

    public function __construct($entries = null, $links = null, $totalNumEntries = null, $PageType = null)
    {
      parent::__construct();
      $this->entries = $entries;
      $this->links = $links;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
