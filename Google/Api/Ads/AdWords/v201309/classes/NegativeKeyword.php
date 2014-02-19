<?php


/**
 * Criterion to mark a keyword is negative keyword.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class NegativeKeyword extends Keyword
{
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
        return "NegativeKeyword";
    }

    public function __construct($text = null, $matchType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->text = $text;
        $this->matchType = $matchType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}