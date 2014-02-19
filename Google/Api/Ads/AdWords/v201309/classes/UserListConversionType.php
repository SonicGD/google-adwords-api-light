<?php


/**
 * Represents a conversion type used for building remarketing user lists.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class UserListConversionType
{
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsUserListConversionTypeCategory
     */
    public $category;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/rm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "UserListConversionType";
    }

    public function __construct($id = null, $name = null, $category = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
    }
}