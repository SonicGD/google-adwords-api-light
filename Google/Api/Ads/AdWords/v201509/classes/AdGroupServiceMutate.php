<?php


/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 *
 *
 * Adds, updates, or removes ad groups.
 * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
 * {@code REMOVE} operator. To remove an ad group, set its
 * {@link AdGroup#status status} to {@code REMOVED}.</p>
 *
 * @param operations List of unique operations. The same ad group cannot be
 * specified in more than one operation.
 * @return The updated adgroups.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AdGroupOperation[]
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