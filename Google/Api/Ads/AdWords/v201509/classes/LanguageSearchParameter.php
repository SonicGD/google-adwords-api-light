<?php


/**
 * A {@link SearchParameter} used to indicate multiple language being targeted.
 * This can be used, for example, to search for {@code KEYWORD}
 * {@link IdeaType}s that are best for Japanese language.
 *
 * <p>The service allows at most one language to be targeted for
 * {@code KEYWORD} requests.
 * <p>In the {@code KEYWORD} {@link IdeaType} {@code STATS} {@link RequestType}
 * requests, those keywords that are from different language than specified in
 * {@code LanguageSearchParameter} or have unknown language will be filtered
 * out in the response. To avoid filtering, do not include
 * {@code LanguageSearchParameter} in the request.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class LanguageSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
    const XSI_TYPE = "LanguageSearchParameter";

    /**
     * @access public
     * @var Language[]
     */
    public $languages;

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

    public function __construct($languages = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->languages = $languages;
        $this->SearchParameterType = $SearchParameterType;
    }

}