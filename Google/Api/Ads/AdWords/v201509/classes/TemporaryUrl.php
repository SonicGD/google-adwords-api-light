<?php


/**
 * A URL that expires at a particular time.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class TemporaryUrl
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "TemporaryUrl";

    /**
     * @access public
     * @var string
     */
    public $url;

    /**
     * @access public
     * @var string
     */
    public $expiration;

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

    public function __construct($url = null, $expiration = null)
    {
        $this->url = $url;
        $this->expiration = $expiration;
    }

}