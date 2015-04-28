<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 *
 *
 * Adds {@link com.google.ads.api.services.mcm.common.labels.Label}s to, and removes
 * {@linkplain Label}s from, {@link ManagedCustomer}s.
 *
 * <p>To add a {@linkplain Label} to a {@linkplain ManagedCustomer}, use
 * {@link Operator#ADD}.
 * To remove a {@linkplain Label} from a {@linkplain ManagedCustomer}, use
 * {@link Operator#REMOVE}.
 * <p>The label must already exist (see
 * {@link com.google.ads.api.services.mcm.labels.AccountLabelService.mutate} for how to
 * create them) and be owned by the authenticated user.
 * <p>The {@linkplain ManagedCustomer} must already exist and be managed by the customer
 * making the request (either directly or indirectly).
 * <p>A label may be applied to at most 1000 customers.
 * <p>This method does not support partial failures, and will fail if any operation is invalid.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class MutateLabel
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ManagedCustomerLabelOperation[]
     */
    public $operations;

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

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}
