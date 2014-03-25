<?php


/**
 * Returns a list of content verticals.
 *
 * @return A list of verticals.
 * @throws ApiException when there is at least one error with the request.
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GetVerticalCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
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