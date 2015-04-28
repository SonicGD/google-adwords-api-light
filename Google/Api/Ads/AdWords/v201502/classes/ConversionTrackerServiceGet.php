<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of the conversion trackers that match the selector. The
 * actual objects contained in the page's list of entries will be specific
 * subclasses of the abstract {@link ConversionTracker} class.
 *
 * @param serviceSelector The selector specifying the
 *                        {@link ConversionTracker}s to return.
 * @return List of conversion trackers specified by the selector.
 * @throws com.google.ads.api.services.common.error.ApiException if problems
 *                        occurred while retrieving results.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ConversionTrackerServiceGet
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
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
