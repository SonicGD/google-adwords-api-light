<?php


/**
 * Represent a display label entry.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TextLabel extends Label
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TextLabel";

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

    public function __construct($id = null, $name = null, $status = null, $attribute = null, $LabelType = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->attribute = $attribute;
        $this->LabelType = $LabelType;
    }

}