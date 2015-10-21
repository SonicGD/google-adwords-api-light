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
 * Applies the list of mutate operations such as adding or updating conversion trackers.
 * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
 * <code>REMOVE</code> operator. In order to 'disable' a conversion type, send a
 * <code>SET</code> operation for the conversion tracker with the <code>status</code>
 * property set to <code>DISABLED</code></p>
 *
 * <p>You can mutate any ConversionTracker that belongs to your account. You may not
 * mutate a ConversionTracker that belongs to some other account. You may not directly
 * mutate a system-defined ConversionTracker, but you can create a mutable copy of it
 * in your account by sending a mutate request with an ADD operation specifying
 * an originalConversionTypeId matching a system-defined conversion tracker's ID. That new
 * ADDed ConversionTracker will inherit the statistics and properties
 * of the system-defined type, but will be editable as usual.</p>
 *
 * @param operations A list of mutate operations to perform.
 * @return The list of the conversion trackers as they appear after mutation,
 * in the same order as they appeared in the list of operations.
 * @throws com.google.ads.api.services.common.error.ApiException if problems
 * occurred while updating the data.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ConversionTrackerServiceMutate
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var ConversionTrackerOperation[]
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