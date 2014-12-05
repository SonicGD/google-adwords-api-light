<?php


  /**
   * Represents a user list that is a custom combination of user lists and user
   * interests.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LogicalUserList extends UserList
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201406";
      const XSI_TYPE = "LogicalUserList";

    /**
     * @access public
     * @var UserListLogicalRule[]
     */
    public $rules;

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

      public function __construct($rules = null, $id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $type = null, $UserListType = null)
      {
          parent::__construct();
          $this->rules = $rules;
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
          $this->type = $type;
          $this->UserListType = $UserListType;
      }
  }
