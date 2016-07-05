<?php


/**
 * Approval and policy information attached to an entity.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class PolicyData
{

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const XSI_TYPE = "PolicyData";

  /**
   * @access public
   * @var DisapprovalReason[]
   */
  public $disapprovalReasons;

  /**
   * @access public
   * @var string
   */
  public $PolicyDataType;
  private $_parameterMap = [
      "PolicyData.Type" => "PolicyDataType",
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

  public function __construct($disapprovalReasons = null, $PolicyDataType = null)
  {
    $this->disapprovalReasons = $disapprovalReasons;
    $this->PolicyDataType = $PolicyDataType;
  }

}