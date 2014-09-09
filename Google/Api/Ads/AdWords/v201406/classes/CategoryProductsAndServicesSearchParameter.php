<?php


  /**
   * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
   * sets a keyword category that all search results should belong to.
   * Uses the newer "Products and Services" taxonomy.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
   * <p>This element is supported by following {@link RequestType}s: IDEAS.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class CategoryProductsAndServicesSearchParameter extends SearchParameter
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "CategoryProductsAndServicesSearchParameter";

    /**
     * @access public
     * @var integer
     */
    public $categoryId;

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

    public function __construct($categoryId = null, $SearchParameterType = null)
    {
      parent::__construct();
      $this->categoryId = $categoryId;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
