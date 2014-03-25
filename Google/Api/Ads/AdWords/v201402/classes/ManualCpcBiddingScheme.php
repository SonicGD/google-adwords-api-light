<?php



/**
 * Manual click based bidding where user pays per click.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ManualCpcBiddingScheme extends BiddingScheme {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "ManualCpcBiddingScheme";

  /**
   * @access public
   * @var boolean
   */
  public $enhancedCpcEnabled;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($enhancedCpcEnabled = null, $BiddingSchemeType = null) {
    parent::__construct();
    $this->enhancedCpcEnabled = $enhancedCpcEnabled;
    $this->BiddingSchemeType = $BiddingSchemeType;
  }
}