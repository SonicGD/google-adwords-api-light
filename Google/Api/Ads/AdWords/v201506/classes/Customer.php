<?php


/**
 * Represents a customer for the CustomerService.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class Customer
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201506";
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
     * @access public
     * @var string
     */
    public $trackingUrlTemplate;

    /**
     * @access public
     * @var ConversionTrackingSettings
     */
    public $conversionTrackingSettings;

    /**
     * @access public
     * @var RemarketingSettings
     */
    public $remarketingSettings;

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
        $customerId = null,
        $currencyCode = null,
        $dateTimeZone = null,
        $descriptiveName = null,
        $companyName = null,
        $canManageClients = null,
        $testAccount = null,
        $autoTaggingEnabled = null,
        $trackingUrlTemplate = null,
        $conversionTrackingSettings = null,
        $remarketingSettings = null
    ) {
        $this->customerId = $customerId;
        $this->currencyCode = $currencyCode;
        $this->dateTimeZone = $dateTimeZone;
        $this->descriptiveName = $descriptiveName;
        $this->companyName = $companyName;
        $this->canManageClients = $canManageClients;
        $this->testAccount = $testAccount;
        $this->autoTaggingEnabled = $autoTaggingEnabled;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
        $this->conversionTrackingSettings = $conversionTrackingSettings;
        $this->remarketingSettings = $remarketingSettings;
    }

}