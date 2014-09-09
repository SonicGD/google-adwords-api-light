<?php


  /**
   * A set of {@link SearchParameter}s are supplied to the
   * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
   * to specify how the user wants to filter the set of all possible
   * {@link com.google.ads.api.services.targetingideas.TargetingIdea}s.
   *
   * There is a {@link SearchParameter} for all types of inputs.
   * {@link SearchParameter}s can conceptually be broken down into two types.
   * <ul>
   * <li>Input {@link SearchParameter}s provide the seed information from which
   * ideas should be generated or statistic information is desired
   * (e.g. {@link RelatedToQuerySearchParameter},
   * {@link RelatedToUrlSearchParameter}, etc).
   * Such {@link SearchParameters} are required for valid requests.</li>
   * <li>Filter {@link SearchParameter}s are used to trim down the results based
   * on {@link com.google.ads.api.services.targetingideas.attributes.Attribute}
   * related information (eg. {@link CompetitionSearchParameter}, etc.).</li>
   * </ul><p>
   *
   * A request should only contain one instance of each {@link SearchParameter}.
   *
   * NOTICE: Starting with version v201406, requests containing multiple
   * instances of the same search parameter will be rejected.
   * <p>One or more of the following {@link SearchParameter}s are required:<br/>
   * <ul><li>{@link CategoryProductsAndServicesSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * <li>{@link SeedAdGroupIdSearchParameter}</li>
   * </ul><p>
   * <p><b>{@link IdeaType} KEYWORD supports following {@link SearchParameter}s:</b><br/>
   * <ul>
   * <li>{@link CategoryProductsAndServicesSearchParameter}</li>
   * <li>{@link CompetitionSearchParameter}</li>
   * <li>{@link ExcludedKeywordSearchParameter}</li>
   * <li>{@link IdeaTextFilterSearchParameter}</li>
   * <li>{@link IncludeAdultContentSearchParameter}</li>
   * <li>{@link LanguageSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link NetworkSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * <li>{@link SearchVolumeSearchParameter}</li>
   * <li>{@link SeedAdGroupIdSearchParameter}</li>
   * </ul><p>
   * <p><b>{@link IdeaType} PLACEMENT supports following {@link SearchParameter}s:</b><br/>
   * <ul>
   * <li>{@link AdSpecListSearchParameter}</li>
   * <li>{@link LanguageSearchParameter}</li>
   * <li>{@link LocationSearchParameter}</li>
   * <li>{@link PlacementTypeSearchParameter}</li>
   * <li>{@link RelatedToQuerySearchParameter}</li>
   * <li>{@link RelatedToUrlSearchParameter}</li>
   * </ul><p>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SearchParameter
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "SearchParameter";

    /**
     * @access public
     * @var string
     */
    public $SearchParameterType;
    private $_parameterMap = array(
      "SearchParameter.Type" => "SearchParameterType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
      $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
      if (!isset($this->_parameterMap[$var])) {
        return null;
      }

      return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
      return $this->_parameterMap;
    }

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

    public function __construct($SearchParameterType = null)
    {
      $this->SearchParameterType = $SearchParameterType;
    }

  }
