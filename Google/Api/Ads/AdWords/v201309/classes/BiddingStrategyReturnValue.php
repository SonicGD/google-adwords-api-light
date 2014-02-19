<?php


/**
 * A container for return values from the {@link BiddingStrategyService#mutate} call.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BiddingStrategyReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var SharedBiddingStrategy[]
     */
    public $value;

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
        return "BiddingStrategyReturnValue";
    }

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}