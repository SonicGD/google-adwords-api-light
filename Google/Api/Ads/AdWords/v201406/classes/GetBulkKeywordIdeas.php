<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.  This method is specialized for returning
   * bulk keyword ideas, and thus the selector must be set for
   * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
   * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
   * A limited, fixed set of attributes will be returned.
   *
   * <p>A single-valued
   * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
   * must be supplied.  Single-valued
   * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
   * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
   * both optional.  Other search parameters compatible with a keyword query may also be
   * supplied.
   *
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
   * or less. If a URL based search is performed it will return up to 100 keywords when the site is
   * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
   * to 800. Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   *
   * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
   * but allows less control over the query. For fine-tuned queries that do not need large numbers
   * of results, prefer {@link #get(TargetingIdeaSelector)}.
   *
   * @param selector Query describing the bulk keyword ideas to return.
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class GetBulkKeywordIdeas
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var TargetingIdeaSelector
     */
    public $selector;

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

    public function __construct($selector = null)
    {
      $this->selector = $selector;
    }

  }
