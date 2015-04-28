<?php


/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s used to
 * filter the results by the amount of competition (eg: LOW, MEDIUM, HIGH).
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class CompetitionSearchParameter extends SearchParameter
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201502";
    const XSI_TYPE = "CompetitionSearchParameter";

    /**
     * @access public
     * @var tnsCompetitionSearchParameterLevel[]
     */
    public $levels;

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

    public function __construct($levels = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->levels = $levels;
        $this->SearchParameterType = $SearchParameterType;
    }
}
