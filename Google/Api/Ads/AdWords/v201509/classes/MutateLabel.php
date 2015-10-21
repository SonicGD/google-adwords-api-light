<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 *
 *
 * Adds {@linkplain AccountLabel}s to, and removes
 * {@linkplain AccountLabel}s from, {@linkplain ManagedCustomer}s.
 *
 * <p>To add an {@linkplain AccountLabel} to a {@linkplain ManagedCustomer},
 * use {@link Operator#ADD}.
 * To remove an {@linkplain AccountLabel} from a {@linkplain ManagedCustomer},
 * use {@link Operator#REMOVE}.</p>
 * <p>The label must already exist (see {@link AccountLabelService#mutate} for
 * how to create them) and be owned by the authenticated user.</p>
 * <p>The {@linkplain ManagedCustomer} must already exist and be managed by
 * the customer making the request (either directly or indirectly).</p>
 * <p>An AccountLabel may be applied to at most 1000 customers.</p>
 * <p>This method does not support partial failures, and will fail if any
 * operation is invalid.</p>
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class MutateLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201509";
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