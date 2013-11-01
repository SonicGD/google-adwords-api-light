<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Represents a Operating System Version Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OperatingSystemVersion extends Criterion
{
    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $osMajorVersion;

    /**
     * @access public
     * @var integer
     */
    public $osMinorVersion;

    /**
     * @access public
     * @var tnsOperatingSystemVersionOperatorType
     */
    public $operatorType;

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

    public function __construct(
        $name = null,
        $osMajorVersion = null,
        $osMinorVersion = null,
        $operatorType = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->name = $name;
        $this->osMajorVersion = $osMajorVersion;
        $this->osMinorVersion = $osMinorVersion;
        $this->operatorType = $operatorType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}