<?php


/**
 * Properties of the level of detail of the report being viewed.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class LevelOfDetail
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "LevelOfDetail";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

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

    public function __construct($campaignId = null)
    {
        $this->campaignId = $campaignId;
    }

}