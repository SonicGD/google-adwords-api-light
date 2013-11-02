<?php



/**
 * A container for return values from the ManagedCustomerService.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerReturnValue
{
    /**
     * @access public
     * @var ManagedCustomer[]
     */
    public $value;

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
        return "ManagedCustomerReturnValue";
    }

    public function __construct($value = null)
    {
        $this->value = $value;
    }
}