<?php



/**
 * Represents a customer for the CustomerService.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Customer {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201402";
  const XSI_TYPE = "Customer";

  /**
   * @access public
   * @var integer
   */
  public $customerId;

  /**
   * @access public
   * @var string
   */
  public $currencyCode;

  /**
   * @access public
   * @var string
   */
  public $dateTimeZone;

  /**
   * @access public
   * @var string
   */
  public $descriptiveName;

  /**
   * @access public
   * @var string
   */
  public $companyName;

  /**
   * @access public
   * @var boolean
   */
  public $canManageClients;

  /**
   * @access public
   * @var boolean
   */
  public $testAccount;

  /**
   * @access public
   * @var boolean
   */
  public $autoTaggingEnabled;

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

  public function __construct($customerId = null, $currencyCode = null, $dateTimeZone = null, $descriptiveName = null, $companyName = null, $canManageClients = null, $testAccount = null, $autoTaggingEnabled = null) {
    $this->customerId = $customerId;
    $this->currencyCode = $currencyCode;
    $this->dateTimeZone = $dateTimeZone;
    $this->descriptiveName = $descriptiveName;
    $this->companyName = $companyName;
    $this->canManageClients = $canManageClients;
    $this->testAccount = $testAccount;
    $this->autoTaggingEnabled = $autoTaggingEnabled;
  }
}