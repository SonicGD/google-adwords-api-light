<?php


/**
 * An adwords grouping string. This ProductDimension is only permitted for ProductScopes in
 * Product Listing Ad campaigns.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductAdwordsGrouping extends ProductDimension
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ProductAdwordsGrouping";

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($value = null, $ProductDimensionType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ProductDimensionType = $ProductDimensionType;
    }
}