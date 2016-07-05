<?php


/**
 * Represents a PreferredContent criterion.
 *
 * <p>Possible IDs: {@code 400} ({@code YOUTUBE_TOP_CONTENT}).</p>
 * <p>A criterion of this type can only be created using an ID.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class PreferredContent extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "PreferredContent";

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

    public function __construct($id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}