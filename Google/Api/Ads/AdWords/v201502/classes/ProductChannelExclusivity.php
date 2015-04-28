<?php


/**
 * The product channel exclusivity dimension, which limits the availability of an offer between only
 * local, only online, or both. Only supported by campaigns of
 * {@link AdvertisingChannelType#SHOPPING}.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ProductChannelExclusivity extends ProductDimension
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ProductChannelExclusivity";

    /**
     * @access public
     * @var tnsShoppingProductChannelExclusivity
     */
    public $channelExclusivity;

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

    public function __construct($channelExclusivity = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->channelExclusivity = $channelExclusivity;
        $this->ProductDimensionType = $ProductDimensionType;
    }
}
