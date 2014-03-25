<?php


/**
 * Scope of products in a shopping campaign. Contains a set of product dimensions, all of which
 * a product has to match to be included in the campaign. A campaign can contain multiple
 * ProductScope criterion and that products are included as long as they match at least one
 * ProductScope. Non-existence of ProductScope means all products are included in the campaign.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class ProductScope extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "ProductScope";

    /**
     * @access public
     * @var ProductDimension[]
     */
    public $dimensions;

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

    public function __construct($dimensions = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->dimensions = $dimensions;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}