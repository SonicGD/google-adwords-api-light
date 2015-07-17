<?php


/**
 * Represents a {@link TargetingIdea} returned by search criteria specified in
 * the {@link TargetingIdeaSelector}. Targeting ideas are keywords or placements
 * that are similar to those the user inputs.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class TargetingIdea
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
    const XSI_TYPE = "TargetingIdea";

    /**
     * @access public
     * @var Type_AttributeMapEntry[]
     */
    public $data;

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

    public function __construct($data = null)
    {
        $this->data = $data;
    }

}