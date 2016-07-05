<?php


/**
 * Represents the temporary id for an ad union id, which the user can specify.
 * The temporary id can be used to group ads together during ad creation.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TempAdUnionId extends AdUnionId
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "TempAdUnionId";

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

    public function __construct($id = null, $AdUnionIdType = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->AdUnionIdType = $AdUnionIdType;
    }

}