<?php


/**
 * A {@link SearchParameter} that specifies the level of search volume expected in results,
 * and it has a direct relationship to {@link AttributeType#SEARCH_VOLUME SEARCH_VOLUME}. Absence of
 * a {@link SearchVolumeSearchParameter} in a {@link TargetingIdeaSelector} is equivalent to having
 * no constraint on search volume specified.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class SearchVolumeSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "SearchVolumeSearchParameter";

    /**
     * @access public
     * @var LongComparisonOperation
     */
    public $operation;

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

    public function __construct($operation = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->operation = $operation;
        $this->SearchParameterType = $SearchParameterType;
    }

}