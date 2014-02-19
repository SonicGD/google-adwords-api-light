<?php


/**
 * {@link SoapHeader} for AdWords Express services.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ExpressSoapHeader extends SoapRequestHeader
{
    /**
     * @access public
     * @var integer
     */
    public $expressBusinessId;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ExpressSoapHeader";
    }

    public function __construct(
        $expressBusinessId = null,
        $authToken = null,
        $clientCustomerId = null,
        $developerToken = null,
        $userAgent = null,
        $validateOnly = null,
        $partialFailure = null
    ) {
        parent::__construct();
        $this->expressBusinessId = $expressBusinessId;
        $this->authToken = $authToken;
        $this->clientCustomerId = $clientCustomerId;
        $this->developerToken = $developerToken;
        $this->userAgent = $userAgent;
        $this->validateOnly = $validateOnly;
        $this->partialFailure = $partialFailure;
    }
}