<?php


/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
 *
 *
 *
 * Possible actions:
 * <ul>
 * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
 * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call
 * mutate with the SET operator. Null fields will be interpreted to mean "no change"
 * <li> Delete the label - call mutate with REMOVE operator
 * </ul>
 *
 * @param operations list of unique operations to be executed in a single transaction, in the
 *                   order specified.
 * @return the mutated labels, in the same order that they were in as the parameter
 * @throws ApiException if problems occurs while modifying label information
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class AccountLabelServiceMutate
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var AccountLabelOperation[]
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
