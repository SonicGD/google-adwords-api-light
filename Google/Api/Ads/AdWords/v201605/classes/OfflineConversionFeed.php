<?php


/**
 * Represents an entire record in the offline conversions feed that the advertiser uploads.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class OfflineConversionFeed
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
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
     * @access public
     * @var string
     */
    public $conversionCurrencyCode;

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
        $googleClickId = null,
        $conversionName = null,
        $conversionTime = null,
        $conversionValue = null,
        $conversionCurrencyCode = null
    ) {
        $this->googleClickId = $googleClickId;
        $this->conversionName = $conversionName;
        $this->conversionTime = $conversionTime;
        $this->conversionValue = $conversionValue;
        $this->conversionCurrencyCode = $conversionCurrencyCode;
    }

}