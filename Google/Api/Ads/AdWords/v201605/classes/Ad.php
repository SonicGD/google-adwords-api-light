<?php


/**
 * The base class of all ad types. {@code Ad} objects themselves cannot be modified. If you want to
 * make a change to an {@code Ad} object, you must REMOVE its AdGroupAd and ADD a new AdGroupAd with
 * the new {@code Ad}. This will result in a new {@code Ad} ID, so stats for the original {@code Ad}
 * and the new {@code Ad} will appear under separate IDs in reports.
 *
 * <p>When calling {@code AdGroupAdService} to update the {@code status} of an {@code AdGroupAd},
 * you can construct an {@code Ad} object (instead of the {@code Ad}'s concrete type) with the
 * {@link #id} field set.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Ad
{

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
  const XSI_TYPE = "Ad";

  /**
   * @access public
   * @var integer
   */
  public $id;

  /**
   * @access public
   * @var string
   */
  public $url;

  /**
   * @access public
   * @var string
   */
  public $displayUrl;

  /**
   * @access public
   * @var string[]
   */
  public $finalUrls;

  /**
   * @access public
   * @var string[]
   */
  public $finalMobileUrls;

  /**
   * @access public
   * @var AppUrl[]
   */
  public $finalAppUrls;

  /**
   * @access public
   * @var string
   */
  public $trackingUrlTemplate;

  /**
   * @access public
   * @var CustomParameters
   */
  public $urlCustomParameters;

  /**
   * @access public
   * @var tnsAdType
   */
  public $type;

  /**
   * @access public
   * @var integer
   */
  public $devicePreference;

  /**
   * @access public
   * @var string
   */
  public $AdType;
  private $_parameterMap = [
      "Ad.Type" => "AdType",
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

  public function __construct(
      $id = null,
      $url = null,
      $displayUrl = null,
      $finalUrls = null,
      $finalMobileUrls = null,
      $finalAppUrls = null,
      $trackingUrlTemplate = null,
      $urlCustomParameters = null,
      $type = null,
      $devicePreference = null,
      $AdType = null
  ) {
    $this->id = $id;
    $this->url = $url;
    $this->displayUrl = $displayUrl;
    $this->finalUrls = $finalUrls;
    $this->finalMobileUrls = $finalMobileUrls;
    $this->finalAppUrls = $finalAppUrls;
    $this->trackingUrlTemplate = $trackingUrlTemplate;
    $this->urlCustomParameters = $urlCustomParameters;
    $this->type = $type;
    $this->devicePreference = $devicePreference;
    $this->AdType = $AdType;
  }

}