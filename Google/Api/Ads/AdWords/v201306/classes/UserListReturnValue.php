<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A container for return values from the UserListService.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var UserList[]
     */
    public $value;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/rm/v201306";
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

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}