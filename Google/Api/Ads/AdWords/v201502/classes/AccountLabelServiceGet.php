<?php


/**
 * Returns a list of labels specified by the selector for the authenticated user.
 *
 * @param selector filters the list of labels to return
 * @return response containing lists of labels that meet all the criteria of the selector
 * @throws ApiException if a problem occurs fetching the information requested
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AccountLabelServiceGet
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}
