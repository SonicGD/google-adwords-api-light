<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns information about changed entities inside a customer's account.
 *
 * @param selector Specifies the filter for selecting changehistory events for a customer.
 * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
 * changed at each level.  All Campaigns that are requested in the selector will be returned,
 * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CustomerSyncServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomerSyncSelector
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