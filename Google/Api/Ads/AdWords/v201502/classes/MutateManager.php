<?php


/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
 *
 *
 *
 * Moves client customers to new managers (moving links). Only the following action is possible:
 *
 * <ul>
 * <li>SET + ACTIVE: manager moves client customers to new managers within the same MCC
 * hierarchy
 * </ul>
 *
 * @param operations List of unique operations.
 * @return results for the given operations
 * @throws ApiException with a {@link ManagedCustomerServiceError}
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class MutateManager
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var MoveOperation[]
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