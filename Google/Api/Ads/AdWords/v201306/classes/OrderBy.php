<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OrderBy
{
    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsSortOrder
     */
    public $sortOrder;

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

    public function __construct($field = null, $sortOrder = null)
    {
        $this->field = $field;
        $this->sortOrder = $sortOrder;
    }
}