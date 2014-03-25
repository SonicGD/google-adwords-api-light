<?php



/**
 * A {@link Criterion} which describes the product or service an Ad is targeting. A product and
 * service criterion can be used to derive a group of {@link KeywordSet} by AdWords Express.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductService extends Criterion {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201402";
  const XSI_TYPE = "ProductService";

  /**
   * @access public
   * @var string
   */
  public $text;

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

  public function __construct($text = null, $id = null, $type = null, $CriterionType = null) {
    parent::__construct();
    $this->text = $text;
    $this->id = $id;
    $this->type = $type;
    $this->CriterionType = $CriterionType;
  }
}