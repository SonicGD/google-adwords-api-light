<?php


/**
 * A {@link Criterion} which describes the product or service an Ad is targeting. A product and
 * service criterion can be used to derive a group of {@link KeywordSet} by AdWords Express.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class ProductService extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201605";
    const XSI_TYPE = "ProductService";

    /**
     * @access public
     * @var string
     */
    public $text;

    /**
     * @access public
     * @var string
     */
    public $locale;

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

    public function __construct($text = null, $locale = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->text = $text;
        $this->locale = $locale;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}