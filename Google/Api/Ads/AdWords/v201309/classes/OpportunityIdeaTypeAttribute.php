<?php


/**
 * {@link Attribute} type that contains an {@link OpportunityIdeaType} value.
 * For example, if a
 * {@link com.google.ads.api.services.optimization.bulkopportunity.OpportunityIdea}
 * represents a keyword idea, its {@link OpportunityIdeaTypeAttribute} would
 * contain a {@code KEYWORD} {@link OpportunityIdeaType}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class OpportunityIdeaTypeAttribute extends Attribute
{
    /**
     * @access public
     * @var tnsOpportunityIdeaType
     */
    public $value;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "OpportunityIdeaTypeAttribute";
    }

    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }
}