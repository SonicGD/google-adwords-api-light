<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Operation for adding, updating or removing operations. For removing,
 * use SET and mark status as DELETED.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentOperation extends Operation
{
    /**
     * @access public
     * @var Experiment
     */
    public $operand;

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
        return "ExperimentOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}