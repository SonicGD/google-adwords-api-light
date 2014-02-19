<?php


/**
 * A constant operand in a matching function.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ConstantOperand extends FunctionArgumentOperand
{
    /**
     * @access public
     * @var tnsConstantOperandConstantType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $longValue;

    /**
     * @access public
     * @var boolean
     */
    public $booleanValue;

    /**
     * @access public
     * @var double
     */
    public $doubleValue;

    /**
     * @access public
     * @var string
     */
    public $stringValue;

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
        return "ConstantOperand";
    }

    public function __construct(
        $type = null,
        $longValue = null,
        $booleanValue = null,
        $doubleValue = null,
        $stringValue = null,
        $FunctionArgumentOperandType = null
    ) {
        parent::__construct();
        $this->type = $type;
        $this->longValue = $longValue;
        $this->booleanValue = $booleanValue;
        $this->doubleValue = $doubleValue;
        $this->stringValue = $stringValue;
        $this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
    }
}