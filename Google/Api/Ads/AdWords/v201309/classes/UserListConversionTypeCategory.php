<?php


/**
 * User can create only BOOMERANG_EVENT conversion types. For all other types
 * UserListService service will return OTHER.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class UserListConversionTypeCategory
{
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
        return "UserListConversionType.Category";
    }

    public function __construct()
    {
    }
}