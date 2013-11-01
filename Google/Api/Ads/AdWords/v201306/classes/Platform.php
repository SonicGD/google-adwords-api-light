<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents Platform criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 *
 *
 * Represents data about a bidlandscape for an adgroup.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Platform extends Criterion
{
    /**
     * @access public
     * @var string
     */
    public $platformName;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($platformName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->platformName = $platformName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}