<?php


/**
 * Operation used to create or mutate a CampaignExtensionSetting.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class CampaignExtensionSettingOperation extends Operation
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "CampaignExtensionSettingOperation";

    /**
     * @access public
     * @var CampaignExtensionSetting
     */
    public $operand;

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

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }

}