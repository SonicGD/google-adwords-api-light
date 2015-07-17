<?php


/**
 * Represents an AdWords manager-client link.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class ManagedCustomerLink
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201506";
    const XSI_TYPE = "ManagedCustomerLink";

    /**
     * @access public
     * @var integer
     */
    public $managerCustomerId;

    /**
     * @access public
     * @var integer
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var tnsLinkStatus
     */
    public $linkStatus;

    /**
     * @access public
     * @var string
     */
    public $pendingDescriptiveName;

    /**
     * @access public
     * @var boolean
     */
    public $isHidden;

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
        $managerCustomerId = null,
        $clientCustomerId = null,
        $linkStatus = null,
        $pendingDescriptiveName = null,
        $isHidden = null
    ) {
        $this->managerCustomerId = $managerCustomerId;
        $this->clientCustomerId = $clientCustomerId;
        $this->linkStatus = $linkStatus;
        $this->pendingDescriptiveName = $pendingDescriptiveName;
        $this->isHidden = $isHidden;
    }

}