<?php



  /**
   * Upgrades the url for a set of ads.
   * @param operations The list of upgrades to apply.
   * @return The list of Ads that were upgraded.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class UpgradeUrl {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdUrlUpgrade[]
     */
    public $operations;

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

    public function __construct($operations = null) {
      $this->operations = $operations;
    }

  }