<?php


/**
 * Represents Location criterion.
 * <p>A criterion of this type can only be created using an ID.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class Location extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "Location";

    /**
     * @access public
     * @var string
     */
    public $locationName;

    /**
     * @access public
     * @var string
     */
    public $displayType;

    /**
     * @access public
     * @var tnsLocationTargetingStatus
     */
    public $targetingStatus;

    /**
     * @access public
     * @var Location[]
     */
    public $parentLocations;

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
        $locationName = null,
        $displayType = null,
        $targetingStatus = null,
        $parentLocations = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->locationName = $locationName;
        $this->displayType = $displayType;
        $this->targetingStatus = $targetingStatus;
        $this->parentLocations = $parentLocations;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}