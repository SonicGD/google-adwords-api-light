<?php


/**
 * {@link SearchParameter} that specifies whether adult content should be
 * returned.<p>
 *
 * Presence of this {@link SearchParameter} will allow adult keywords
 * to be included in the results.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class IncludeAdultContentSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
    const XSI_TYPE = "IncludeAdultContentSearchParameter";

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

    public function __construct($SearchParameterType = null)
    {
        parent::__construct();
        $this->SearchParameterType = $SearchParameterType;
    }
}