<?php


  /**
   * Represents a multiplier to modify a bid. The final value after
   * modification is represented by the multiplied bid value.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BidMultiplier
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BidMultiplier";

    /**
     * @access public
     * @var double
     */
    public $multiplier;

    /**
     * @access public
     * @var Bid
     */
    public $multipliedBid;

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

    public function __construct($multiplier = null, $multipliedBid = null)
    {
      $this->multiplier = $multiplier;
      $this->multipliedBid = $multipliedBid;
    }

  }
