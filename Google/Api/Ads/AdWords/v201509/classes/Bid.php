<?php


/**
 * Represents a bid of a certain amount.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Bid
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Bid";

    /**
     * @access public
     * @var Money
     */
    public $amount;

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

    public function __construct($amount = null)
    {
        $this->amount = $amount;
    }

}