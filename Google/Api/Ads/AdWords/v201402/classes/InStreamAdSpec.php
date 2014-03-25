<?php


/**
 * Placement request/response object which provides details about instream
 * ad types, options, and other available configuration variables.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InStreamAdSpec
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
    const XSI_TYPE = "InStreamAdSpec";

    /**
     * @access public
     * @var tnsInStreamAdSpecInStreamType[]
     */
    public $inStreamTypes;

    /**
     * @access public
     * @var integer[]
     */
    public $durations;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($inStreamTypes = null, $durations = null)
    {
        $this->inStreamTypes = $inStreamTypes;
        $this->durations = $durations;
    }
}