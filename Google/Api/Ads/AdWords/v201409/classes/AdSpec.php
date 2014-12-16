<?php



  /**
   * Interface for ad specifications to implement. See individual spec
   * documentation for more details on how to use each type, and
   * {@link AdSpecListSearchParameter} to understand what these specs are for.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class AdSpec {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
    const XSI_TYPE = "AdSpec";

    /**
     * @access public
     * @var DisplayAdSpec
     */
    public $DisplayAdSpec;

    /**
     * @access public
     * @var InStreamAdSpec
     */
    public $InStreamAdSpec;

    /**
     * @access public
     * @var TextAdSpec
     */
    public $TextAdSpec;

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

    public function __construct($DisplayAdSpec = null, $InStreamAdSpec = null, $TextAdSpec = null) {
      $this->DisplayAdSpec = $DisplayAdSpec;
      $this->InStreamAdSpec = $InStreamAdSpec;
      $this->TextAdSpec = $TextAdSpec;
    }

  }