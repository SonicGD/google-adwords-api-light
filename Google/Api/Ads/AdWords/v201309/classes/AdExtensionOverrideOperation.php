<?php


/**
 * AdExtensionOverride service operation.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdExtensionOverrideOperation extends Operation
{
    /**
     * @access public
     * @var AdExtensionOverride
     */
    public $operand;

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
        return "AdExtensionOverrideOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}