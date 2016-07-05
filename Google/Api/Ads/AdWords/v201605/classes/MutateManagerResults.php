<?php


/**
 * Results of a {@link ManagedCustomerService#mutateManager} call, which moves client customers to
 * new managers.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class MutateManagerResults
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "MutateManagerResults";

    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($links = null)
    {
        $this->links = $links;
    }

}