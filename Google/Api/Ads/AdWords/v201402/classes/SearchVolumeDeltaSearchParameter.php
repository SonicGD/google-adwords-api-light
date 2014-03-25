<?php



/**
 * A {@link SearchParameter} that specifies the level of search volume delta expected in results,
 * and it is directly related to
 * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME_DELTA}.
 * Absence of a {@link SearchVolumeDeltaSearchParameter} in a
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
 * equivalent to having no constraint on search volume delta specified.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: STATS, IDEAS.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SearchVolumeDeltaSearchParameter extends SearchParameter {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "SearchVolumeDeltaSearchParameter";

  /**
   * @access public
   * @var DoubleComparisonOperation
   */
  public $relative;

  /**
   * @access public
   * @var LongComparisonOperation
   */
  public $absolute;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($relative = null, $absolute = null, $SearchParameterType = null) {
    parent::__construct();
    $this->relative = $relative;
    $this->absolute = $absolute;
    $this->SearchParameterType = $SearchParameterType;
  }
}