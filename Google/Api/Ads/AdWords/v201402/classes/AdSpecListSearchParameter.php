<?php



/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s used to
 * filter the results by the list of {@link AdSpec}s. See {@link AdSpec}
 * documentation for details on available options.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdSpecListSearchParameter extends SearchParameter {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "AdSpecListSearchParameter";

  /**
   * @access public
   * @var AdSpec[]
   */
  public $adSpecs;

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

  public function __construct($adSpecs = null, $SearchParameterType = null) {
    parent::__construct();
    $this->adSpecs = $adSpecs;
    $this->SearchParameterType = $SearchParameterType;
  }
}