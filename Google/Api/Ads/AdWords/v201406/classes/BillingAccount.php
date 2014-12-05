<?php


  /**
   * Represents an BillingAccount.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BillingAccount
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/billing/v201406";
      const XSI_TYPE = "BillingAccount";

    /**
     * @access public
     * @var string
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

    /**
     * @access public
     * @var string
     */
    public $primaryBillingId;

    /**
     * @access public
     * @var string
     */
    public $secondaryBillingId;

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

      public function __construct($id = null, $name = null, $currencyCode = null, $primaryBillingId = null, $secondaryBillingId = null)
      {
          $this->id = $id;
          $this->name = $name;
          $this->currencyCode = $currencyCode;
          $this->primaryBillingId = $primaryBillingId;
          $this->secondaryBillingId = $secondaryBillingId;
      }
  }
