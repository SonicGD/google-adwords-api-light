<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a page of ideas that match the query described by the specified
 * {@link TargetingIdeaSelector}.
 *
 * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
 * less.  Large result sets must be composed through multiple calls to this method, advancing the
 * paging {@code startIndex} value by {@code numberResults} with each call.</p>
 *
 * @param selector Query describing the types of results to return when
 *                 finding matches (similar keyword ideas).
 * @return A {@link TargetingIdeaPage} of results, that is a subset of the
 *                 list of possible ideas meeting the criteria of the
 *                 {@link TargetingIdeaSelector}.
 * @throws ApiException If problems occurred while querying for ideas.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class TargetingIdeaServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }

}