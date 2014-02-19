<?php


/**
 * AdGroupAd service operations.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupAdOperation extends Operation
{
    /**
     * @access public
     * @var AdGroupAd
     */
    public $operand;

    /**
     * @access public
     * @var ExemptionRequest[]
     */
    public $exemptionRequests;

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
        return "AdGroupAdOperation";
    }

    public function __construct($operand = null, $exemptionRequests = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->exemptionRequests = $exemptionRequests;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}