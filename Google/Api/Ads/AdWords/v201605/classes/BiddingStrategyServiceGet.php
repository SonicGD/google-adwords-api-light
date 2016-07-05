<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of bidding strategies that match the selector.
 *
 * @return list of bidding strategies specified by the selector.
 * @throws com.google.ads.api.services.common.error.ApiException if problems
 * occurred while retrieving results.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class BiddingStrategyServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
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