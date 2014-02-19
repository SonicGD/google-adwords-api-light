<?php


/**
 * Operation for uploading {@link OfflineConversionFeed}.
 * See {@link OfflineConversionFeedService#mutate}
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OfflineConversionFeedOperation extends Operation
{
    /**
     * @access public
     * @var OfflineConversionFeed
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
        return "OfflineConversionFeedOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}