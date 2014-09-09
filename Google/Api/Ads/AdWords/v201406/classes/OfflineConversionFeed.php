<?php


  /**
   * Represents an entire record in the offline conversions feed that the advertiser uploads.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class OfflineConversionFeed
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "OfflineConversionFeed";

    /**
     * @access public
     * @var string
     */
    public $googleClickId;

    /**
     * @access public
     * @var string
     */
    public $conversionName;

    /**
     * @access public
     * @var string
     */
    public $conversionTime;

    /**
     * @access public
     * @var double
     */
    public $conversionValue;

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

    public function __construct($googleClickId = null, $conversionName = null, $conversionTime = null, $conversionValue = null)
    {
      $this->googleClickId = $googleClickId;
      $this->conversionName = $conversionName;
      $this->conversionTime = $conversionTime;
      $this->conversionValue = $conversionValue;
    }

  }
