<?php


/**
 * Class representing a location with its geographic coordinates.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class GeoLocation
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "GeoLocation";

  /**
   * @access public
   * @var GeoPoint
   */
  public $geoPoint;

  /**
   * @access public
   * @var Address
   */
  public $address;

  /**
   * @access public
   * @var base64Binary
   */
  public $encodedLocation;

  /**
   * @access public
   * @var string
   */
  public $GeoLocationType;
    private $_parameterMap = [
      "GeoLocation.Type" => "GeoLocationType",
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

    public function __construct($geoPoint = null, $address = null, $encodedLocation = null, $GeoLocationType = null)
    {
        $this->geoPoint = $geoPoint;
        $this->address = $address;
        $this->encodedLocation = $encodedLocation;
        $this->GeoLocationType = $GeoLocationType;
    }
}
