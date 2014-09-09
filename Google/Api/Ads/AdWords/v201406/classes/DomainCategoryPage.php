<?php


  /**
   * Contains a subset of {@link DomainCategory} objects resulting from
   * the filtering and paging of {@link DataService#getDomainCategory} call.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class DomainCategoryPage extends Page
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "DomainCategoryPage";

    /**
     * @access public
     * @var DomainCategory[]
     */
    public $entries;

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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
