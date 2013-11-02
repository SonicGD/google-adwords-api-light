<?php

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Applies the list of mutate operations.
 *
 * @param operations the operations to apply
 *
 * @return the modified CriterionList entities
 * @throws ApiException
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SharedSetServiceMutate
{
    /**
     * @access public
     * @var SharedSetOperation[]
     */
    public $operations;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
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