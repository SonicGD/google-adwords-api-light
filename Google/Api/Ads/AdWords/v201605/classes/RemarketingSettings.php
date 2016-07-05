<?php


/**
 * Customer-wide settings related to AdWords remarketing.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class RemarketingSettings
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/mcm/v201605";
    const XSI_TYPE = "RemarketingSettings";

    /**
     * @access public
     * @var string
     */
    public $snippet;

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

    public function __construct($snippet = null)
    {
        $this->snippet = $snippet;
    }

}