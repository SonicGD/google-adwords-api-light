<?php


  /**
   * Parameter of Webpage criterion, expressed as a list of conditions, or
   * logical expressions, for targeting webpages of an advertiser's website.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class WebpageParameter extends CriterionParameter
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "WebpageParameter";

    /**
     * @access public
     * @var string
     */
    public $criterionName;

    /**
     * @access public
     * @var WebpageCondition[]
     */
    public $conditions;

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

      public function __construct($criterionName = null, $conditions = null, $CriterionParameterType = null)
      {
          parent::__construct();
          $this->criterionName = $criterionName;
          $this->conditions = $conditions;
          $this->CriterionParameterType = $CriterionParameterType;
      }
  }
