<?php


/**
 * Represents an operand containing geo information, specifying the scope of the
 * geographical area.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class GeoTargetOperand extends FunctionArgumentOperand
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "GeoTargetOperand";

    /**
     * @access public
     * @var integer[]
     */
    public $locations;

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

    public function __construct($locations = null, $FunctionArgumentOperandType = null)
    {
        parent::__construct();
        $this->locations = $locations;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }
}
