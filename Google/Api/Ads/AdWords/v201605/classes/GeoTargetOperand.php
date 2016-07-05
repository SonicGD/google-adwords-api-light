<?php


/**
 * Represents an operand containing geo information, specifying the scope of the
 * geographical area. Currently, geo targets are restricted to a single
 * criterion id per operand.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class GeoTargetOperand extends FunctionArgumentOperand
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "GeoTargetOperand";

    /**
     * @access public
     * @var integer[]
     */
    public $locations;

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

    public function __construct($locations = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->locations = $locations;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }

}