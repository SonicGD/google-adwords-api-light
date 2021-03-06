<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Update the authorized customer.
 *
 * <p>While there are a limited set of properties available to update, please read this
 * <a href="https://support.google.com/analytics/answer/1033981">help center article
 * on auto-tagging</a> before updating {@code customer.autoTaggingEnabled}.
 *
 * @param customer the requested updated value for the customer.
 * @throws ApiException
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Customer
     */
    public $customer;

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

    public function __construct($customer = null)
    {
        $this->customer = $customer;
    }

}