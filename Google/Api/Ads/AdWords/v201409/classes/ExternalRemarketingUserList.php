<?php



  /**
   * User lists created in the DoubleClick platform that are mapped
   * from DoubleClick to AdWords. These lists are readonly.
   * @package Google_Api_Ads_AdWords_v201409
   * @subpackage v201409
   */
  class ExternalRemarketingUserList extends UserList {

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201409";
    const XSI_TYPE = "ExternalRemarketingUserList";

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace() {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName() {
      return self::XSI_TYPE;
    }

    public function __construct($id = null, $isReadOnly = null, $name = null, $description = null, $status = null, $integrationCode = null, $accessReason = null, $accountUserListStatus = null, $membershipLifeSpan = null, $size = null, $sizeRange = null, $sizeForSearch = null, $sizeRangeForSearch = null, $listType = null, $UserListType = null) {
      parent::__construct();
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