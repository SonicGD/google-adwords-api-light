<?php


  /**
   * Percentage CPA based bidding where user pays a percent of conversions.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class PercentCpaBid extends Bids
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "PercentCpaBid";

    /**
     * @access public
     * @var integer
     */
    public $bid;

    /**
     * @access public
     * @var tnsBidSource
     */
    public $percentCpaBidSource;

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

    public function __construct($bid = null, $percentCpaBidSource = null, $BidsType = null)
    {
      parent::__construct();
      $this->bid = $bid;
      $this->percentCpaBidSource = $percentCpaBidSource;
      $this->BidsType = $BidsType;
    }

  }
