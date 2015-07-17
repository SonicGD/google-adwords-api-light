<?php


/**
 * Represents a dynamic search ad. This ad will have its headline and
 * destination URL auto-generated at serving time according to domain name
 * specific information provided by {@link DomainInfoExtension} linked at the
 * campaign level.
 *
 * <p>Auto-generated fields: headline and destination URL (may contain an optional
 * tracking URL).</p>
 *
 * <p><b>Required fields:</b> {@code description1}, {@code description2},
 * {@code displayUrl}.</p>
 *
 * <p>The URL field must contain at least one of the following placeholder tags
 * (URL parameters):</p>
 * <ul>
 * <li>{unescapedlpurl}</li>
 * <li>{escapedlpurl}</li>
 * <li>{lpurlpath}</li>
 * <li>{lpurl}</li>
 * </ul>
 *
 * <p>If no URL is specified, {unescapedlpurl} will be used as default.</p>
 *
 * <ul>
 * <li>{unescapedlpurl} can only be used at the beginning of the URL field. It
 * will be replaced with the full landing page URL of the displayed ad. Extra query
 * parameters can be added to the end, e.g.: "{unescapedlpurl}?lang=en".</li>
 *
 * <li>{escapedlpurl} will be replaced with the URL-encoded version of the full
 * landing page URL. This makes it suitable for use as a query parameter
 * value (e.g.: "http://www.3rdpartytracker.com/?lp={escapedlpurl}") but
 * not at the beginning of the URL field.</li>
 *
 * <li>{lpurlpath} will be replaced with the path and query part of the landing
 * page URL and can be added to a different URL, e.g.:
 * "http://www.mygoodbusiness.com/tracking/{lpurlpath}".</li>
 *
 * <li>{lpurl} encodes the "?" and "=" of the landing page URL making it suitable
 * for use as a query parameter. If found at the beginning of the URL field, it is
 * replaced by the {unescapedlpurl} value.
 * E.g.: "http://tracking.com/redir.php?tracking=xyz&url={lpurl}".</li>
 * </ul>
 *
 * <p>There are also special rules that come into play depending on whether the
 * destination URL uses local click tracking or third-party click tracking.</p>
 *
 * <p class="note">Note that {@code finalUrls} and {@code finalMobileUrls}
 * cannot be set for dynamic search ads.</p>
 *
 * <p>For more information, see the article
 * <a href="//support.google.com/adwords/answer/2549100">Using dynamic tracking URLs</a>.
 * </p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class DynamicSearchAd extends Ad
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "DynamicSearchAd";

    /**
     * @access public
     * @var string
     */
    public $description1;

    /**
     * @access public
     * @var string
     */
    public $description2;

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
        $description1 = null,
        $description2 = null,
        $id = null,
        $url = null,
        $displayUrl = null,
        $finalUrls = null,
        $finalMobileUrls = null,
        $finalAppUrls = null,
        $trackingUrlTemplate = null,
        $urlCustomParameters = null,
        $devicePreference = null,
        $AdType = null
    ) {
        parent::__construct();
        $this->description1 = $description1;
        $this->description2 = $description2;
        $this->id = $id;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->finalUrls = $finalUrls;
        $this->finalMobileUrls = $finalMobileUrls;
        $this->finalAppUrls = $finalAppUrls;
        $this->trackingUrlTemplate = $trackingUrlTemplate;
        $this->urlCustomParameters = $urlCustomParameters;
        $this->devicePreference = $devicePreference;
        $this->AdType = $AdType;
    }

}