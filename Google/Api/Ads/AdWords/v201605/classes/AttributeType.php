<?php


/**
 * Represents the type of {@link Attribute}.
 * <p><b>{@link IdeaType} KEYWORD supports the following {@link AttributeType}s:</b><br/>
 * <ul><li>{@link #AVERAGE_CPC}</li>
 * <li>{@link #CATEGORY_PRODUCTS_AND_SERVICES}</li>
 * <li>{@link #COMPETITION}</li>
 * <li>{@link #EXTRACTED_FROM_WEBPAGE}</li>
 * <li>{@link #IDEA_TYPE}</li>
 * <li>{@link #KEYWORD_TEXT}</li>
 * <li>{@link #SEARCH_VOLUME}</li>
 * <li>{@link #TARGETED_MONTHLY_SEARCHES}</li>
 * </ul>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AttributeType
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "AttributeType";

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

    public function __construct()
    {
    }

}