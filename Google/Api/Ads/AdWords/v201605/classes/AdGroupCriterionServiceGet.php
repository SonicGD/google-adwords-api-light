<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Gets adgroup criteria.
 *
 * @param serviceSelector filters the adgroup criteria to be returned.
 * @return a page (subset) view of the criteria selected
 * @throws ApiException when there is at least one error with the request
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdGroupCriterionServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }

}