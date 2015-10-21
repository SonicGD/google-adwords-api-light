<?php


/**
 * This represents an entry in a map with a key of type Size
 * and value of type Dimensions.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class Media_Size_DimensionsMapEntry
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "Media_Size_DimensionsMapEntry";

    /**
     * @access public
     * @var tnsMediaSize
     */
    public $key;

    /**
     * @access public
     * @var Dimensions
     */
    public $value;

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

    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }

}