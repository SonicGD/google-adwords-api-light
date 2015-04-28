<?php


/**
 * <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class SharedSetStatus
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "SharedSet.Status";

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
