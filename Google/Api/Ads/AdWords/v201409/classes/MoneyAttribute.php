<?php



  /**
   * {@link Attribute} type that contains a {@link Money} value.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class MoneyAttribute extends Attribute {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201409";
    const XSI_TYPE = "MoneyAttribute";

    /**
     * @access public
     * @var Money
     */
    public $value;

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

    public function __construct($value = null, $AttributeType = null) {
      parent::__construct();
      $this->value = $value;
      $this->AttributeType = $AttributeType;
    }

  }