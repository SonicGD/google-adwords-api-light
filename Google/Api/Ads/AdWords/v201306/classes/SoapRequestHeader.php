<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Defines the required and optional elements within the header of a SOAP request.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SoapRequestHeader
{
    /**
     * @access public
     * @var string
     */
    public $authToken;

    /**
     * @access public
     * @var string
     */
    public $clientCustomerId;

    /**
     * @access public
     * @var string
     */
    public $developerToken;

    /**
     * @access public
     * @var string
     */
    public $userAgent;

    /**
     * @access public
     * @var boolean
     */
    public $validateOnly;

    /**
     * @access public
     * @var boolean
     */
    public $partialFailure;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "SoapHeader";
    }

    public function __construct(
        $authToken = null,
        $clientCustomerId = null,
        $developerToken = null,
        $userAgent = null,
        $validateOnly = null,
        $partialFailure = null
    ) {
        $this->authToken = $authToken;
        $this->clientCustomerId = $clientCustomerId;
        $this->developerToken = $developerToken;
        $this->userAgent = $userAgent;
        $this->validateOnly = $validateOnly;
        $this->partialFailure = $partialFailure;
    }
}