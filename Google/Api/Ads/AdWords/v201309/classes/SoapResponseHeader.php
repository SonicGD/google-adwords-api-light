<?php


/**
 * Defines the elements within the header of a SOAP response.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class SoapResponseHeader
{
    /**
     * @access public
     * @var string
     */
    public $requestId;

    /**
     * @access public
     * @var string
     */
    public $serviceName;

    /**
     * @access public
     * @var string
     */
    public $methodName;

    /**
     * @access public
     * @var integer
     */
    public $operations;

    /**
     * @access public
     * @var integer
     */
    public $responseTime;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "SoapResponseHeader";
    }

    public function __construct(
        $requestId = null,
        $serviceName = null,
        $methodName = null,
        $operations = null,
        $responseTime = null
    ) {
        $this->requestId = $requestId;
        $this->serviceName = $serviceName;
        $this->methodName = $methodName;
        $this->operations = $operations;
        $this->responseTime = $responseTime;
    }
}