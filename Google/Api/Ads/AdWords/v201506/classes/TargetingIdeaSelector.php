<?php


/**
 * A descriptor for finding {@link TargetingIdea}s that match the specified criteria.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class TargetingIdeaSelector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201506";
    const XSI_TYPE = "TargetingIdeaSelector";

    /**
     * @access public
     * @var SearchParameter[]
     */
    public $searchParameters;

    /**
     * @access public
     * @var tnsIdeaType
     */
    public $ideaType;

    /**
     * @access public
     * @var tnsRequestType
     */
    public $requestType;

    /**
     * @access public
     * @var tnsAttributeType[]
     */
    public $requestedAttributeTypes;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * @access public
     * @var string
     */
    public $localeCode;

    /**
     * @access public
     * @var string
     */
    public $currencyCode;

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
        $searchParameters = null,
        $ideaType = null,
        $requestType = null,
        $requestedAttributeTypes = null,
        $paging = null,
        $localeCode = null,
        $currencyCode = null
    ) {
        $this->searchParameters = $searchParameters;
        $this->ideaType = $ideaType;
        $this->requestType = $requestType;
        $this->requestedAttributeTypes = $requestedAttributeTypes;
        $this->paging = $paging;
        $this->localeCode = $localeCode;
        $this->currencyCode = $currencyCode;
    }

}