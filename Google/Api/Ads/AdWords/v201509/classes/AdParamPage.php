<?php


/**
 * Represents a page of AdParams returned by the {@link AdParamService}.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdParamPage
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdParamPage";

    /**
     * @access public
     * @var AdParam[]
     */
    public $entries;

    /**
     * @access public
     * @var integer
     */
    public $totalNumEntries;

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

    public function __construct($entries = null, $totalNumEntries = null)
    {
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
    }

}