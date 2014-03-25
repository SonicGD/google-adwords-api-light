<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of bid landscapes for the ad groups specified in the selector.
 *
 * @param serviceSelector Selects the entities to return bid landscapes for.
 *
 * @return A list of bid landscapes.
 * @throws ApiException when there is at least one error with the request.
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GetAdGroupBidLandscape
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }
}