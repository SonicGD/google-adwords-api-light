<?php



/**
 * The specified id refered to an entity which either doesn't exist or is not accessible to the
 * customer. e.g. campaign belongs to another customer.
 * 
 * 
 * 
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EntityNotFoundReason {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "EntityNotFound.Reason";

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