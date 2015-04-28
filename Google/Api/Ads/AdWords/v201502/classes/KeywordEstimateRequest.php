<?php


/**
 * Represents a keyword to be estimated.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class KeywordEstimateRequest extends EstimateRequest
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "KeywordEstimateRequest";

    /**
     * @access public
     * @var Keyword
     */
    public $keyword;

    /**
     * @access public
     * @var Money
     */
    public $maxCpc;

    /**
     * @access public
     * @var boolean
     */
    public $isNegative;

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

    public function __construct($keyword = null, $maxCpc = null, $isNegative = null, $EstimateRequestType = null)
    {
        parent::__construct();
        $this->keyword = $keyword;
        $this->maxCpc = $maxCpc;
        $this->isNegative = $isNegative;
        $this->EstimateRequestType = $EstimateRequestType;
    }
}
