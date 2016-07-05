<?php


/**
 * A container for return values from {@link ManagedCustomerService#mutateLabel}.
 * <p>For successful {@linkplain ADD} operations, the input {@linkplain ManagedCustomerLabel}
 * is returned.
 * <p>For successful {@linkplain REMOVE} operations, the returned {@linkplain ManagedCustomerLabel}
 * will contain the customer ID and a null label ID.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ManagedCustomerLabelReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "ManagedCustomerLabelReturnValue";

    /**
     * @access public
     * @var ManagedCustomerLabel[]
     */
    public $value;

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

    public function __construct($value = null)
    {
        $this->value = $value;
    }

}