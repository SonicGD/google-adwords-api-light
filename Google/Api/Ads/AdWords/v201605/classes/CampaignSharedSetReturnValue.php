<?php


/**
 * A container for return values from the {@link CampaignSharedSetService#mutate} call.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CampaignSharedSetReturnValue extends ListReturnValue
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CampaignSharedSetReturnValue";

    /**
     * @access public
     * @var CampaignSharedSet[]
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

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }

}