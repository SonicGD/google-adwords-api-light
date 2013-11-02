<?php



/**
 * Represents a customer for the CustomerService.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Customer
{
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
     * @var boolean
     */
    public $canManageClients;

    /**
     * @access public
     * @var boolean
     */
    public $testAccount;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Customer";
    }

    public function __construct(
        $customerId = null,
        $currencyCode = null,
        $dateTimeZone = null,
        $descriptiveName = null,
        $canManageClients = null,
        $testAccount = null
    ) {
        $this->customerId = $customerId;
        $this->currencyCode = $currencyCode;
        $this->dateTimeZone = $dateTimeZone;
        $this->descriptiveName = $descriptiveName;
        $this->canManageClients = $canManageClients;
        $this->testAccount = $testAccount;
    }
}