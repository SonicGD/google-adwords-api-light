<?php


  /**
   * The base class of all ad types. To update basic ad fields,
   * you can construct an {@code Ad} object (instead of
   * the ad's concrete type) with the appropriate fields set.
   * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Ad
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
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
     * @var integer
     */
    public $devicePreference;

    /**
     * @access public
     * @var string
     */
    public $AdType;
      private $_parameterMap = array(
      "Ad.Type" => "AdType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
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

      public function __construct($id = null, $url = null, $displayUrl = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $devicePreference = null, $AdType = null)
      {
          $this->id = $id;
          $this->url = $url;
          $this->displayUrl = $displayUrl;
          $this->finalUrls = $finalUrls;
          $this->finalMobileUrls = $finalMobileUrls;
          $this->trackingUrlTemplate = $trackingUrlTemplate;
          $this->urlCustomParameters = $urlCustomParameters;
          $this->devicePreference = $devicePreference;
          $this->AdType = $AdType;
      }
  }
