<?php


/**
 * Container for criterion quality information.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class QualityInfo
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "QualityInfo";

    /**
     * @access public
     * @var boolean
     */
    public $isKeywordAdRelevanceAcceptable;

    /**
     * @access public
     * @var boolean
     */
    public $isLandingPageQualityAcceptable;

    /**
     * @access public
     * @var integer
     */
    public $qualityScore;

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

    public function __construct(
        $isKeywordAdRelevanceAcceptable = null,
        $isLandingPageQualityAcceptable = null,
        $qualityScore = null
    ) {
        $this->isKeywordAdRelevanceAcceptable = $isKeywordAdRelevanceAcceptable;
        $this->isLandingPageQualityAcceptable = $isLandingPageQualityAcceptable;
        $this->qualityScore = $qualityScore;
    }
}
