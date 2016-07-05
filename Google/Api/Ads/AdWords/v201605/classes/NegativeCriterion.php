<?php


/**
 * A negative criterion. It wraps a {@link Criterion} and will be associated with an ad group as a
 * {@code NegativeAdGroupCriterion}.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class NegativeCriterion extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "NegativeCriterion";

    /**
     * @access public
     * @var Criterion
     */
    public $criterion;

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

    public function __construct($criterion = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->criterion = $criterion;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}