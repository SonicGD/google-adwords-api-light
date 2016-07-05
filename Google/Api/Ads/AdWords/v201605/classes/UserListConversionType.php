<?php


/**
 * Represents a conversion type used for building remarketing user lists.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class UserListConversionType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "UserListConversionType";

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

    public function __construct($id = null, $name = null, $category = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
    }

}