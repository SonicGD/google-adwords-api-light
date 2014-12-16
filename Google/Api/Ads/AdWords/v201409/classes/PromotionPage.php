<?php



  /**
   * Contains a page of {@link Promotion}s with no stats.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class PromotionPage extends NoStatsPage {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201409";
    const XSI_TYPE = "PromotionPage";

    /**
     * @access public
     * @var Promotion[]
     */
    public $entries;

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

    public function __construct($entries = null) {
      parent::__construct();
      $this->entries = $entries;
    }

  }