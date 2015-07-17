<?php


/**
 * Represents the type of idea.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class IdeaType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
    const XSI_TYPE = "IdeaType";

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

    public function __construct()
    {
    }

}