<?php


  /**
   * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SharedCriterion
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SharedCriterion";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

    /**
     * @access public
     * @var boolean
     */
    public $negative;

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

    public function __construct($sharedSetId = null, $criterion = null, $negative = null)
    {
      $this->sharedSetId = $sharedSetId;
      $this->criterion = $criterion;
      $this->negative = $negative;
    }

  }
