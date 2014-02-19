<?php


/**
 * A keyword set based {@link Criterion}.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class KeywordSet extends Criterion
{
    /**
     * @access public
     * @var string
     */
    public $keywordSetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var boolean
     */
    public $deprecated;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "KeywordSet";
    }

    public function __construct(
        $keywordSetId = null,
        $name = null,
        $deprecated = null,
        $id = null,
        $type = null,
        $CriterionType = null
    ) {
        parent::__construct();
        $this->keywordSetId = $keywordSetId;
        $this->name = $name;
        $this->deprecated = $deprecated;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}