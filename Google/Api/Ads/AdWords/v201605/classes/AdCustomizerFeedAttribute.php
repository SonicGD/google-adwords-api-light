<?php


/**
 * An attribute of an AdCustomizerFeed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdCustomizerFeedAttribute
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdCustomizerFeedAttribute";

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
     * @access public
     * @var tnsAdCustomizerFeedAttributeType
     */
    public $type;

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

    public function __construct($id = null, $name = null, $type = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
    }

}