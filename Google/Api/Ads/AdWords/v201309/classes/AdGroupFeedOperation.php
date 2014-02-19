<?php


/**
 * Operation used to create or mutate an AdGroupFeed.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupFeedOperation extends Operation
{
    /**
     * @access public
     * @var AdGroupFeed
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
        return "AdGroupFeedOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}