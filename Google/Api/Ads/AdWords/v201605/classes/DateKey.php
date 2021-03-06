<?php


/**
 * A custom parameter of date type. Supported date formats are listed as follows:
 * <ul>
 * <li> 2011-03-31T12:20:19-05:00
 * <li> 03/31/2011 12:20:19-05:00
 * <li> Fri, Mar 31 2011 12:20:19 EST
 * <li> Fri, Mar 31 12:20:19 EST 2011
 * </ul>
 * <p>
 * If time zone information is not present in the value,
 * it is assumed to be PST. If time value is not specified,
 * it defaults to midnight of the day.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DateKey
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "DateKey";

    /**
     * @access public
     * @var string
     */
    public $name;

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

    public function __construct($name = null)
    {
        $this->name = $name;
    }

}