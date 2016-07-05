<?php


/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CriterionUserList extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CriterionUserList";

    /**
     * @access public
     * @var integer
     */
    public $userListId;

    /**
     * @access public
     * @var string
     */
    public $userListName;

    /**
     * @access public
     * @var tnsCriterionUserListMembershipStatus
     */
    public $userListMembershipStatus;

    /**
     * @access public
     * @var boolean
     */
    public $userListEligibleForSearch;

    /**
     * @access public
     * @var boolean
     */
    public $userListEligibleForDisplay;

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

    public function __construct(
        $userListId = null,
        $userListName = null,
        $userListMembershipStatus = null,
        $userListEligibleForSearch = null,
        $userListEligibleForDisplay = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->userListId = $userListId;
        $this->userListName = $userListName;
        $this->userListMembershipStatus = $userListMembershipStatus;
        $this->userListEligibleForSearch = $userListEligibleForSearch;
        $this->userListEligibleForDisplay = $userListEligibleForDisplay;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}