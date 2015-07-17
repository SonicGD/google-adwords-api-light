<?php


/**
 * A label that can be attached to accounts.
 * A manager may attach labels to accounts that s/he manages
 * (either directly or indirectly).
 *
 * <p>Note that these are not interchangeable with campaign management labels, and are owned
 * by manager customers.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class AccountLabel
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201506";
    const XSI_TYPE = "AccountLabel";

    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var string
     */
    public $name;

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

    public function __construct($id = null, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

}