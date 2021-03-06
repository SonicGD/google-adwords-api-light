<?php


/**
 * The reasons for errors when querying for stats.
 *
 *
 *
 * Base error class for Ad Group Criterion Service.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class StatsQueryErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "StatsQueryError.Reason";

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

    public function __construct()
    {
    }

}