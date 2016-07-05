<?php


/**
 * Creative for a text ad.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Creative
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "Creative";

    /**
     * @access public
     * @var string
     */
    public $headline;

    /**
     * @access public
     * @var string
     */
    public $line1;

    /**
     * @access public
     * @var string
     */
    public $line2;

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

    public function __construct($headline = null, $line1 = null, $line2 = null)
    {
        $this->headline = $headline;
        $this->line1 = $line1;
        $this->line2 = $line2;
    }

}