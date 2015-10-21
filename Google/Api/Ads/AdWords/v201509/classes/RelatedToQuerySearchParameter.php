<?php


/**
 * A {@link SearchParameter} for a query of {@code String}s.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class RelatedToQuerySearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
    const XSI_TYPE = "RelatedToQuerySearchParameter";

    /**
     * @access public
     * @var string[]
     */
    public $queries;

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

    public function __construct($queries = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->queries = $queries;
        $this->SearchParameterType = $SearchParameterType;
    }

}