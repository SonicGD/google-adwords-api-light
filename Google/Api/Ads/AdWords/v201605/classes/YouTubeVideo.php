<?php


/**
 * YouTube video criterion.
 * <p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class YouTubeVideo extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "YouTubeVideo";

    /**
     * @access public
     * @var string
     */
    public $videoId;

    /**
     * @access public
     * @var string
     */
    public $videoName;

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

    public function __construct($videoId = null, $videoName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->videoId = $videoId;
        $this->videoName = $videoName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}