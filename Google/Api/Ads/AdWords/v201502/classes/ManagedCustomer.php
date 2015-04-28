<?php


/**
 * Data object that represents a managed customer.  Member of {@link ManagedCustomerPage}.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class ManagedCustomer
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201502";
    const XSI_TYPE = "ManagedCustomer";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $companyName;

    /**
     * @access public
     * @var integer
     */
    public $customerId;

    /**
     * @access public
     * @var boolean
     */
    public $canManageClients;

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
     * @var boolean
     */
    public $testAccount;

    /**
     * @access public
     * @var AccountLabel[]
     */
    public $accountLabels;

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
        $name = null,
        $companyName = null,
        $customerId = null,
        $canManageClients = null,
        $currencyCode = null,
        $dateTimeZone = null,
        $testAccount = null,
        $accountLabels = null
    ) {
        $this->name = $name;
        $this->companyName = $companyName;
        $this->customerId = $customerId;
        $this->canManageClients = $canManageClients;
        $this->currencyCode = $currencyCode;
        $this->dateTimeZone = $dateTimeZone;
        $this->testAccount = $testAccount;
        $this->accountLabels = $accountLabels;
    }
}
