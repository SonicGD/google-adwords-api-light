<?php


/**
 * Represents a Carrier Criterion.
 * <p>A criterion of this type can only be created using an ID.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Carrier extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Carrier";

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var string
     */
    public $countryCode;

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

    public function __construct($name = null, $countryCode = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->countryCode = $countryCode;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}