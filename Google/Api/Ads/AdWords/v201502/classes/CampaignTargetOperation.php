<?php


/**
 * Sets a list of targets on a specified campaign.
 * <p class="note"><b>Note:</b> Only the <code>SET</code> operator is supported.</p>
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class CampaignTargetOperation extends Operation
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "CampaignTargetOperation";

    /**
     * @access public
     * @var TargetList
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}
