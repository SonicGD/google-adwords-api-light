<?php


  /**
   * Represents domain category information.
   *
   *
   *
   * Represents data about a bidlandscape for an adgroup.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DomainCategory extends DimensionProperties
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DomainCategory";

    /**
     * @access public
     * @var string
     */
    public $category;

    /**
     * @access public
     * @var double
     */
    public $coverage;

    /**
     * @access public
     * @var string
     */
    public $domainName;

    /**
     * @access public
     * @var string
     */
    public $isoLanguage;

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

    public function __construct($category = null, $coverage = null, $domainName = null, $isoLanguage = null, $levelOfDetail = null)
    {
      parent::__construct();
      $this->category = $category;
      $this->coverage = $coverage;
      $this->domainName = $domainName;
      $this->isoLanguage = $isoLanguage;
      $this->levelOfDetail = $levelOfDetail;
    }

  }
