<?php



/**
 * Bid multiplier used to modify the bid of a criterion while running
 * an experiment.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AdGroupCriterionExperimentBidMultiplier {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "AdGroupCriterionExperimentBidMultiplier";

  /**
   * @access public
   * @var string
   */
  public $AdGroupCriterionExperimentBidMultiplierType;
  private $_parameterMap = array(
    "AdGroupCriterionExperimentBidMultiplier.Type" => "AdGroupCriterionExperimentBidMultiplierType",
  );

  /**
   * Provided for setting non-php-standard named variables
   * @param $var Variable name to set
   * @param $value Value to set
   */
  public function __set($var, $value) {
    $this->{$this->_parameterMap[$var]} = $value;
  }

  /**
   * Provided for getting non-php-standard named variables
   * @param $var Variable name to get
   * @return mixed Variable value
   */
  public function __get($var) {
    if (!isset($this->_parameterMap[$var])) {
      return null;
    }
    return $this->{$this->_parameterMap[$var]};
  }

  /**
   * Provided for getting non-php-standard named variables
   * @return array parameter map
   */
  protected function getParameterMap() {
    return $this->_parameterMap;
  }

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

  public function __construct($AdGroupCriterionExperimentBidMultiplierType = null) {
    $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
  }
}