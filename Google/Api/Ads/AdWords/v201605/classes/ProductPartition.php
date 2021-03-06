<?php


/**
 * Product partition (product group) in a shopping campaign. Depending on its type, a product
 * partition subdivides products along some product dimension, specifies a bid for products, or
 * excludes products from bidding.
 *
 * <p>Inner nodes of a product partition hierarchy are always subdivisions. Each child is linked to
 * the subdivision via the {@code parentCriterionId} and defines a {@code caseValue}. For all
 * children of the same subdivision, the {@code caseValue}s must be mutually different but
 * instances of the same class.
 *
 * To create a subdivision and child node in the same API request, they should refer to each other
 * using temporary criterion IDs in the {@code parentCriterionId} of the child, and ID field of the
 * subdivision. Temporary IDs are specified by using any negative integer. Temporary IDs only exist
 * within the scope of a single API request. The API will assign real criterion IDs, and replace
 * the temporary values, and the API response will reflect this.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ProductPartition extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "ProductPartition";

    /**
     * @access public
     * @var tnsProductPartitionType
     */
    public $partitionType;

    /**
     * @access public
     * @var integer
     */
    public $parentCriterionId;

    /**
     * @access public
     * @var ProductDimension
     */
    public $caseValue;

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

    public function __construct(
        $partitionType = null,
        $parentCriterionId = null,
        $caseValue = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->partitionType = $partitionType;
        $this->parentCriterionId = $parentCriterionId;
        $this->caseValue = $caseValue;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}