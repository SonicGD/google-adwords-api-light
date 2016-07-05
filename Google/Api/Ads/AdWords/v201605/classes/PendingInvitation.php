<?php


/**
 * Pending invitation result for the getPendingInvitations method.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class PendingInvitation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "PendingInvitation";

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $manager;

    /**
     * @access public
     * @var ManagedCustomer
     */
    public $client;

    /**
     * @access public
     * @var string
     */
    public $creationDate;

    /**
     * @access public
     * @var string
     */
    public $expirationDate;

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

    public function __construct($manager = null, $client = null, $creationDate = null, $expirationDate = null)
    {
        $this->manager = $manager;
        $this->client = $client;
        $this->creationDate = $creationDate;
        $this->expirationDate = $expirationDate;
    }

}