<?php


/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 *
 *
 * Add and remove FeedMappings.
 *
 * @param operations The operations to apply.
 *
 * @return The resulting FeedMappings.
 * @throws ApiException indicates a problem with the request.
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class FeedMappingServiceMutate
{
    /**
     * @access public
     * @var FeedMappingOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($operations = null)
    {
        $this->operations = $operations;
    }
}