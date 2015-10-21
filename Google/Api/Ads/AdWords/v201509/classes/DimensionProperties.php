<?php


/**
 * Top level class for Dimensions.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class DimensionProperties extends DataEntry
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "DimensionProperties";

    /**
     * @access public
     * @var LevelOfDetail
     */
    public $levelOfDetail;

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

    public function __construct($levelOfDetail = null, $DataEntryType = null)
    {
        parent::__construct();
        $this->levelOfDetail = $levelOfDetail;
        $this->DataEntryType = $DataEntryType;
    }

}