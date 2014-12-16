<?php



  /**
   * A client defined rule based on custom parameters sent by web sites.
   * It consists of rule item groups that are connected by OR.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class Rule {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201409";
    const XSI_TYPE = "Rule";

    /**
     * @access public
     * @var RuleItemGroup[]
     */
    public $groups;

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

    public function __construct($groups = null) {
      $this->groups = $groups;
    }

  }