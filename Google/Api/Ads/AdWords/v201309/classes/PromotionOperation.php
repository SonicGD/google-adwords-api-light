<?php


/**
 * A typed {@link Operation} class that uses an instance of {@link Promotion} as its operand.
 *
 * <p class="note"><b>Note:</b> The <code>REMOVE</code> operator is not
 * supported. To remove a {@link Promotion}, set its {@link Promotion#status status} to
 * <code>DELETED</code>.</p>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PromotionOperation extends Operation
{
    /**
     * @access public
     * @var Promotion
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "PromotionOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}