<?php


/**
 * Indicates where bidding strategy came from: campaign, adgroup or criterion.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class BiddingStrategySource
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "BiddingStrategySource";

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

    public function __construct()
    {
    }

}