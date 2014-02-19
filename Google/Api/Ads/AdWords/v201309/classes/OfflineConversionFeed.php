<?php


/**
 * Represents an entire record in the offline conversions feed that the advertiser uploads.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OfflineConversionFeed
{
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
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "OfflineConversionFeed";
    }

    public function __construct(
        $googleClickId = null,
        $conversionName = null,
        $conversionTime = null,
        $conversionValue = null
    ) {
        $this->googleClickId = $googleClickId;
        $this->conversionName = $conversionName;
        $this->conversionTime = $conversionTime;
        $this->conversionValue = $conversionValue;
    }
}