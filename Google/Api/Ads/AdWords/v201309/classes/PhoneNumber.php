<?php



/**
 * Phone number which contains the phone number string plus the region that the number is to be
 * from.
 * @package GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PhoneNumber {
  /**
   * @access public
   * @var tnsRegionCode
   */
  public $regionCode;

  /**
   * @access public
   * @var string
   */
  public $number;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return "https://adwords.google.com/api/adwords/express/v201309";
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return "PhoneNumber";
  }

  public function __construct($regionCode = NULL, $number = NULL) {
    $this->regionCode = $regionCode;
    $this->number = $number;
  }}