<?php


/**
 * {@link SoapHeader} for AdWords Express services.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ExpressSoapHeader extends SoapRequestHeader
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201509";
    const XSI_TYPE = "ExpressSoapHeader";

    /**
     * @access public
     * @var integer
     */
    public $expressBusinessId;

    /**
     * @access public
     * @var string
     */
    public $pageId;

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

    public function __construct($expressBusinessId = null, $pageId = null, $clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
    {
        parent::__construct();
        $this->expressBusinessId = $expressBusinessId;
        $this->pageId = $pageId;
        $this->clientCustomerId = $clientCustomerId;
        $this->developerToken = $developerToken;
        $this->userAgent = $userAgent;
        $this->validateOnly = $validateOnly;
        $this->partialFailure = $partialFailure;
    }

}