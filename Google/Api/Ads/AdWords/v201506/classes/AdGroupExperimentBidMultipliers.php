<?php


/**
 * Bid multiplier used to modify the bid of an adgroup while running
 * an experiment.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class AdGroupExperimentBidMultipliers
{

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
  const XSI_TYPE = "AdGroupExperimentBidMultipliers";

  /**
   * @access public
   * @var string
   */
  public $AdGroupExperimentBidMultipliersType;
  private $_parameterMap = [
      "AdGroupExperimentBidMultipliers.Type" => "AdGroupExperimentBidMultipliersType",
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

  public function __construct($AdGroupExperimentBidMultipliersType = null)
  {
    $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
  }

}