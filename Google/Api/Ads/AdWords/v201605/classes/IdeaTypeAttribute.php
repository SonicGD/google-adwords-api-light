<?php


/**
 * {@link Attribute} type that contains an {@link IdeaType} value. For example, if a
 * {@link TargetingIdea} represents a keyword idea, its {@link IdeaTypeAttribute} would contain a
 * {@code KEYWORD} {@link IdeaType}.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class IdeaTypeAttribute extends Attribute
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "IdeaTypeAttribute";

    /**
     * @access public
     * @var tnsIdeaType
     */
    public $value;

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

    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }

}