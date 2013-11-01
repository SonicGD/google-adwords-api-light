<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Criterion for targeting webpages of an advertiser's website. The
 * website domain name is specified at the campaign level.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Webpage extends Criterion
{
    /**
     * @access public
     * @var WebpageParameter
     */
    public $parameter;

    /**
     * @access public
     * @var double
     */
    public $criteriaCoverage;

    /**
     * @access public
     * @var string[]
     */
    public $criteriaSamples;

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
        $parameter = null,
        $criteriaCoverage = null,
        $criteriaSamples = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->parameter = $parameter;
        $this->criteriaCoverage = $criteriaCoverage;
        $this->criteriaSamples = $criteriaSamples;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}