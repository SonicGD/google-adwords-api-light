<?php


/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : ADD, SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Applies the list of mutate operations (add, remove, and set).
 *
 * <p> Beginning in v201509, add and set operations are treated identically. Performing an add
 * operation when there is an existing ExtensionSetting will cause the operation to be
 * treated like a set operation. Performing a set operation when there is no existing
 * ExtensionSetting will cause the operation to be treated like an add operation.
 *
 * @param operations The operations to apply. The same {@link CustomerExtensionSetting} cannot be
 * specified in more than one operation.
 * @return The changed {@link CustomerExtensionSetting}s.
 * @throws ApiException Indicates a problem with the request.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CustomerExtensionSettingServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CustomerExtensionSettingOperation[]
     */
    public $operations;

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

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }

}