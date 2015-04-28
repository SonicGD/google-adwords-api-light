<?php


/**
 * SimilarUserList is a list of users which are similar to users from another UserList.
 * These lists are readonly and automatically created by google.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class SimilarUserList extends UserList
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201502";
    const XSI_TYPE = "SimilarUserList";

    /**
     * @access public
     * @var integer
     */
    public $seedUserListId;

    /**
     * @access public
     * @var string
     */
    public $seedUserListName;

    /**
     * @access public
     * @var string
     */
    public $seedUserListDescription;

    /**
     * @access public
     * @var tnsUserListMembershipStatus
     */
    public $seedUserListStatus;

    /**
     * @access public
     * @var integer
     */
    public $seedListSize;

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

    public function __construct(
        $seedUserListId = null,
        $seedUserListName = null,
        $seedUserListDescription = null,
        $seedUserListStatus = null,
        $seedListSize = null,
        $id = null,
        $isReadOnly = null,
        $name = null,
        $description = null,
        $status = null,
        $integrationCode = null,
        $accessReason = null,
        $accountUserListStatus = null,
        $membershipLifeSpan = null,
        $size = null,
        $sizeRange = null,
        $sizeForSearch = null,
        $sizeRangeForSearch = null,
        $listType = null,
        $UserListType = null
    ) {
        parent::__construct();
        $this->seedUserListId = $seedUserListId;
        $this->seedUserListName = $seedUserListName;
        $this->seedUserListDescription = $seedUserListDescription;
        $this->seedUserListStatus = $seedUserListStatus;
        $this->seedListSize = $seedListSize;
        $this->id = $id;
        $this->isReadOnly = $isReadOnly;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->integrationCode = $integrationCode;
        $this->accessReason = $accessReason;
        $this->accountUserListStatus = $accountUserListStatus;
        $this->membershipLifeSpan = $membershipLifeSpan;
        $this->size = $size;
        $this->sizeRange = $sizeRange;
        $this->sizeForSearch = $sizeForSearch;
        $this->sizeRangeForSearch = $sizeRangeForSearch;
        $this->listType = $listType;
        $this->UserListType = $UserListType;
    }
}
