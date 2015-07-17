<?php


/**
 * When the request with {@code null} campaign ID in
 * {@link com.google.ads.api.services.trafficestimator.CampaignEstimateRequest}
 * contains an
 * {@link com.google.ads.api.services.trafficestimator.AdGroupEstimateRequest}
 * with an ID.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class TrafficEstimatorErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
    const XSI_TYPE = "TrafficEstimatorError.Reason";

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