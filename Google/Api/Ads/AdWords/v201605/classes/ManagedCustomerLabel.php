<?php


/**
 * A label ID and customer ID the label applies to.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ManagedCustomerLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "ManagedCustomerLabel";

    /**
     * @access public
     * @var integer
     */
    public $labelId;

    /**
     * @access public
     * @var integer
     */
    public $customerId;

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

    public function __construct($labelId = null, $customerId = null)
    {
        $this->labelId = $labelId;
        $this->customerId = $customerId;
    }

}