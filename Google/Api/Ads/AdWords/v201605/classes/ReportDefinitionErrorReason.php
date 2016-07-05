<?php


/**
 * Enums for all the reasons an error can be thrown to the user during
 * a {@link ReportDefinitionService#mutate(java.util.List)} operation.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ReportDefinitionErrorReason
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ReportDefinitionError.Reason";

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