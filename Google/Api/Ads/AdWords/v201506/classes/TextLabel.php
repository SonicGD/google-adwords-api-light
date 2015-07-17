<?php


/**
 * Represent a display label entry.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class TextLabel extends Label
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "TextLabel";

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