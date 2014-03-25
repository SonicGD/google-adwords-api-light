<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Gets the list of alerts matching the specified clients and time period.
 *
 * @param selector selects the alerts for which to search.
 *
 * @return a page of alerts.
 * @throws ApiException if an error occurs
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class AlertServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AlertSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}