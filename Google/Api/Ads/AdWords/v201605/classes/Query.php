<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Loads a TrialPage containing a list of {@link Trial} objects matching the query.
 *
 * @param query defines which subset of all available trials to return, the sort order, and
 *              which fields to include
 *
 * @return Returns a page of matching trial objects.
 * @throws com.google.ads.api.services.common.error.ApiException if errors occurred while
 * retrieving the results.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Query
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var string
     */
    public $query;

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

    public function __construct($query = null)
    {
        $this->query = $query;
    }

}