<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of user lists that meet the selector criteria.
 *
 * @param serviceSelector the selector specifying the {@link UserList}s to return.
 * @return a list of UserList entities which meet the selector criteria.
 * @throws ApiException if problems occurred while fetching UserList information.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdwordsUserListServiceGet
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201605";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }

}