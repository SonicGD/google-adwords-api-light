<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of {@link Label}s.
 *
 * @param serviceSelector The selector specifying the {@link Label}s to return.
 * @return The page containing the {@link Label}s which meet the criteria specified by the
 * selector.
 * @throws ApiException when there is at least one error with the request
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LabelServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }

}