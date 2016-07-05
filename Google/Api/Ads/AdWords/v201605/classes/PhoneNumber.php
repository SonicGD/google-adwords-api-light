<?php


/**
 * Phone number which contains the phone number string plus the region that the number is to be
 * from.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class PhoneNumber
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "PhoneNumber";

    /**
     * @access public
     * @var tnsRegionCode
     */
    public $regionCode;

    /**
     * @access public
     * @var string
     */
    public $number;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($regionCode = null, $number = null)
    {
        $this->regionCode = $regionCode;
        $this->number = $number;
    }

}