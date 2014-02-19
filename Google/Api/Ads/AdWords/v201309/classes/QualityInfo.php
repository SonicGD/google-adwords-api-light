<?php


/**
 * Container for criterion quality information.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class QualityInfo
{
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
     * @var boolean
     */
    public $isLandingPageLatencyAcceptable;

    /**
     * @access public
     * @var integer
     */
    public $qualityScore;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "QualityInfo";
    }

    public function __construct(
        $isKeywordAdRelevanceAcceptable = null,
        $isLandingPageQualityAcceptable = null,
        $isLandingPageLatencyAcceptable = null,
        $qualityScore = null
    ) {
        $this->isKeywordAdRelevanceAcceptable = $isKeywordAdRelevanceAcceptable;
        $this->isLandingPageQualityAcceptable = $isLandingPageQualityAcceptable;
        $this->isLandingPageLatencyAcceptable = $isLandingPageLatencyAcceptable;
        $this->qualityScore = $qualityScore;
    }
}