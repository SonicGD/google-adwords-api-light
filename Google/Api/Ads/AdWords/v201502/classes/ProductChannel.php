<?php


/**
 * The product channel dimension, which specifies the locality of an offer. Only supported by
 * campaigns of {@link AdvertisingChannelType#SHOPPING}.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ProductChannel extends ProductDimension
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "ProductChannel";

    /**
     * @access public
     * @var tnsShoppingProductChannel
     */
    public $channel;

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

    public function __construct($channel = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->channel = $channel;
        $this->ProductDimensionType = $ProductDimensionType;
    }
}
