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
 * operation on a campaign with an existing ExtensionSetting will cause the operation to be
 * treated like a set operation. Performing a set operation on a campaign with no
 * ExtensionSetting will cause the operation to be treated like an add operation.
 *
 * @param operations The operations to apply. The same {@link CampaignExtensionSetting} cannot be
 * specified in more than one operation.
 * @return The changed {@link CampaignExtensionSetting}s.
 * @throws ApiException Indicates a problem with the request.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class CampaignExtensionSettingServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var CampaignExtensionSettingOperation[]
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