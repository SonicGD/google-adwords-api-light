<?php



  /**
   * Represents an element in a template. Each template element is composed
   * of a list of fields (actual value data).
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TemplateElement {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TemplateElement";

    /**
     * @access public
     * @var string
     */
    public $uniqueName;

    /**
     * @access public
     * @var TemplateElementField[]
     */
    public $fields;

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

    public function __construct($uniqueName = null, $fields = null) {
      $this->uniqueName = $uniqueName;
      $this->fields = $fields;
    }

  }