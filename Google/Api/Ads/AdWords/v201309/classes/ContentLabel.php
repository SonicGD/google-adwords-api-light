<?php


/**
 * Content Label for category exclusion.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ContentLabel extends Criterion
{
    /**
     * @access public
     * @var tnsContentLabelType
     */
    public $contentLabelType;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "ContentLabel";
    }

    public function __construct($contentLabelType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->contentLabelType = $contentLabelType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}