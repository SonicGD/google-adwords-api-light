<?php


/**
 * A set of {@link SearchParameter}s is supplied to the {@link TargetingIdeaSelector} to specify how
 * the user wants to filter the set of all possible {@link TargetingIdea}s.
 *
 * <p>There is a {@link SearchParameter} for each type of input.
 * {@link SearchParameter}s can conceptually be broken down into two types.</p>
 *
 * <ul>
 * <li>Input {@link SearchParameter}s provide the seed information from which
 * ideas or stats are to be generated (e.g., {@link RelatedToQuerySearchParameter},
 * {@link RelatedToUrlSearchParameter}, etc.). This type of {@link SearchParameters}
 * is required in requests.
 * <li>Filter {@link SearchParameter}s (e.g., {@link CompetitionSearchParameter}, etc.)
 * are used to trim down the results based on {@link Attribute}-related information.
 * </ul>
 *
 * <p>A request should only contain one instance of each {@link SearchParameter}.
 * Requests containing multiple instances of the same search parameter will be
 * rejected.</p>
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
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class SearchParameter
{

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
  const XSI_TYPE = "SearchParameter";

  /**
   * @access public
   * @var string
   */
  public $SearchParameterType;
  private $_parameterMap = [
      "SearchParameter.Type" => "SearchParameterType",
  ];

  /**
   * Provided for setting non-php-standard named variables
   * @param $var   Variable name to set
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
   * @return string the namespace of this class
   */
  public function getNamespace()
  {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return string the xsi:type name of this class
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