<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns traffic estimates for specified criteria.
 *
 * @param selector Campaigns, ad groups and keywords for which traffic
 *                 should be estimated.
 * @return Traffic estimation results.
 * @throws ApiException if problems occurred while retrieving estimates
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TrafficEstimatorServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TrafficEstimatorSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}