<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns the list of {@link Media} objects that match the query.
   *
   * @param query The SQL-like AWQL query string
   * @returns A list of {@code Media} objects.
   * @throws ApiException when the query is invalid or there are errors processing the request.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Query
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
