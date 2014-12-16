<?php



  /**
   * Represents a field in a template element.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class TemplateElementField {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201409";
    const XSI_TYPE = "TemplateElementField";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsTemplateElementFieldType
     */
    public $type;

    /**
     * @access public
     * @var string
     */
    public $fieldText;

    /**
     * @access public
     * @var Media
     */
    public $fieldMedia;

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

    public function __construct($name = null, $type = null, $fieldText = null, $fieldMedia = null) {
      $this->name = $name;
      $this->type = $type;
      $this->fieldText = $fieldText;
      $this->fieldMedia = $fieldMedia;
    }

  }