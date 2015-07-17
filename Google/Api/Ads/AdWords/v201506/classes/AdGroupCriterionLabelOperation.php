<?php


/**
 * Operations for adding/removing labels from AdGroupCriterion.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class AdGroupCriterionLabelOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "AdGroupCriterionLabelOperation";

    /**
     * @access public
     * @var AdGroupCriterionLabel
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