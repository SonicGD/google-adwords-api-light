<?php


  /**
   * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
   * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SharedSet
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "SharedSet";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsSharedSetType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $memberCount;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var tnsSharedSetStatus
     */
    public $status;

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

    public function __construct($sharedSetId = null, $name = null, $type = null, $memberCount = null, $referenceCount = null, $status = null)
    {
      $this->sharedSetId = $sharedSetId;
      $this->name = $name;
      $this->type = $type;
      $this->memberCount = $memberCount;
      $this->referenceCount = $referenceCount;
      $this->status = $status;
    }

  }
