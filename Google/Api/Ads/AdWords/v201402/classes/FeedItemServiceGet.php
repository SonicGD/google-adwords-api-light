<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of FeedItems that meet the selector criteria.
 *
 * @param selector Determines which FeedItems to return. If empty all
 *                 FeedItems are returned.
 *
 * @return The list of FeedItems.
 * @throws ApiException Indicates a problem with the request.
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class FeedItemServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
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