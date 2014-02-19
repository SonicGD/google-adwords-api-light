<?php



/**
 * User lists created in the DoubleClick platform that are mapped
 * from DoubleClick to AdWords.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExternalRemarketingUserList extends UserList {
  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/rm/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "ExternalRemarketingUserList";
  }

  public function __construct($id = NULL, $isReadOnly = NULL, $name = NULL, $description = NULL, $status = NULL, $integrationCode = NULL, $accessReason = NULL, $accountUserListStatus = NULL, $membershipLifeSpan = NULL, $size = NULL, $sizeRange = NULL, $sizeForSearch = NULL, $sizeRangeForSearch = NULL, $UserListType = NULL) {
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
    $this->UserListType = $UserListType;
  }}