<?php



/**
 * Membership status of the user list. This status indicates whether a user list
 * can accumulate more users and may be targeted to.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class UserListMembershipStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201402";
  const XSI_TYPE = "UserListMembershipStatus";

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

  public function __construct() {
  }
}