<?php



/**
 * Represents a success result of processing a mutate operation that returned
 * a value.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ReturnValueResult extends OperationResult
{
    /**
     * @access public
     * @var Operand
     */
    public $returnValue;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ReturnValueResult";
    }

    public function __construct($returnValue = null, $OperationResultType = null)
    {
        parent::__construct();
        $this->returnValue = $returnValue;
        $this->OperationResultType = $OperationResultType;
    }
}