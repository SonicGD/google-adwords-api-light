<?php


/**
 * Represents the billing summary of the job that provides the overall cost of
 * the job's operations, i.e., for the work done <i>by</i> the job. This
 * therefore excludes the cost of operating on the job itself - setting up the
 * job, polling for its status, retrieving the result, etc.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class BillingSummary
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "BillingSummary";

    /**
     * @access public
     * @var integer
     */
    public $numOperations;

    /**
     * @access public
     * @var integer
     */
    public $numUnits;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($numOperations = null, $numUnits = null)
    {
        $this->numOperations = $numOperations;
        $this->numUnits = $numUnits;
    }
}