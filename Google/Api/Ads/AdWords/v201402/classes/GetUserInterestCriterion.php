<?php


/**
 * Returns a list of user interests.
 *
 * @param userInterestTaxonomyType The type of taxonomy to use when requesting user interests.
 *
 * @return A list of user interests.
 * @throws ApiException when there is at least one error with the request.
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class GetUserInterestCriterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var tnsConstantDataServiceUserInterestTaxonomyType
     */
    public $userInterestTaxonomyType;

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

    public function __construct($userInterestTaxonomyType = null)
    {
        $this->userInterestTaxonomyType = $userInterestTaxonomyType;
    }
}