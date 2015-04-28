<?php


/**
 * Properties of the level of detail of the report being viewed.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class LevelOfDetail
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "LevelOfDetail";

    /**
     * @access public
     * @var integer
     */
    public $campaignId;

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

    public function __construct($campaignId = null)
    {
        $this->campaignId = $campaignId;
    }
}
