<?php



/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s
 * that specifies that the supplied AdGroup should be used as a seed
 * for generating new ideas. For example, an AdGroup's keywords
 * would be used to generate new and related keywords.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class SeedAdGroupIdSearchParameter extends SearchParameter {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "SeedAdGroupIdSearchParameter";

  /**
   * @access public
   * @var integer
   */
  public $adGroupId;

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

  public function __construct($adGroupId = null, $SearchParameterType = null) {
    parent::__construct();
    $this->adGroupId = $adGroupId;
    $this->SearchParameterType = $SearchParameterType;
  }
}