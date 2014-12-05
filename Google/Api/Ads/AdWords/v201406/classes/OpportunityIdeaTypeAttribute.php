<?php


  /**
   * {@link Attribute} type that contains an {@link OpportunityIdeaType} value.
   * For example, if a
   * {@link com.google.ads.api.services.optimization.bulkopportunity.OpportunityIdea}
   * represents a keyword idea, its {@link OpportunityIdeaTypeAttribute} would
   * contain a {@code KEYWORD} {@link OpportunityIdeaType}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OpportunityIdeaTypeAttribute extends Attribute
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
      const XSI_TYPE = "OpportunityIdeaTypeAttribute";

    /**
     * @access public
     * @var tnsOpportunityIdeaType
     */
    public $value;

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

      public function __construct($value = null, $AttributeType = null)
      {
          parent::__construct();
          $this->value = $value;
          $this->AttributeType = $AttributeType;
      }
  }
