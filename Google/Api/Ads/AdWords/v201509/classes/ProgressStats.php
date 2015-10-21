<?php


/**
 * Statistics on the progress of a {@code BatchJob}.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class ProgressStats
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "ProgressStats";

    /**
     * @access public
     * @var integer
     */
    public $numOperationsExecuted;

    /**
     * @access public
     * @var integer
     */
    public $numOperationsSucceeded;

    /**
     * @access public
     * @var integer
     */
    public $estimatedPercentExecuted;

    /**
     * @access public
     * @var integer
     */
    public $numResultsWritten;

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
        $numOperationsExecuted = null,
        $numOperationsSucceeded = null,
        $estimatedPercentExecuted = null,
        $numResultsWritten = null
    ) {
        $this->numOperationsExecuted = $numOperationsExecuted;
        $this->numOperationsSucceeded = $numOperationsSucceeded;
        $this->estimatedPercentExecuted = $estimatedPercentExecuted;
        $this->numResultsWritten = $numResultsWritten;
    }

}