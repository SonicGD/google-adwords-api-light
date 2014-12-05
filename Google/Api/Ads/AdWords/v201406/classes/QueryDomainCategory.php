<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
   *
   * @param query The SQL-like AWQL query string.
   * @return A list of domain categories.
   * @throws ApiException if problems occur while parsing the query
   * or fetching domain categories.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class QueryDomainCategory
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

      public function __construct($query = null)
      {
          $this->query = $query;
      }
  }
