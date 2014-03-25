<?php



/**
 * An enum used to classify the types of changes that have been made to
 * an adgroup/campaign during a specified date range.  This only refers
 * to the field of the entity itself, and not its children.
 * 
 * For example, if an AdGroup name changed, this status would be FIELDS_CHANGED,
 * but if only bids on keywords belonging an AdGroup were changed this
 * status would be FIELDS_UNCHANGED.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ChangeStatus {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/ch/v201402";
  const XSI_TYPE = "ChangeStatus";

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