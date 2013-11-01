<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Contains a list of user lists resulting from the filtering and paging of the
 * {@link UserListService#get} call.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListPage extends Page
{
    /**
     * @access public
     * @var UserList[]
     */
    public $entries;

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

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}