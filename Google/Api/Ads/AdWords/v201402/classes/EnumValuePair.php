<?php


/**
 * Represents information about enum values.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class EnumValuePair
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "EnumValuePair";

    /**
     * @access public
     * @var string
     */
    public $enumValue;

    /**
     * @access public
     * @var string
     */
    public $enumDisplayValue;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($enumValue = null, $enumDisplayValue = null)
    {
        $this->enumValue = $enumValue;
        $this->enumDisplayValue = $enumDisplayValue;
    }
}