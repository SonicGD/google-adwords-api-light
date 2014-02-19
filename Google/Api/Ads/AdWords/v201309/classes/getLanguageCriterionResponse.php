<?php


/**
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class getLanguageCriterionResponse
{
    /**
     * @access public
     * @var Language[]
     */
    public $rval;

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
        return "";
    }

    public function __construct($rval = null)
    {
        $this->rval = $rval;
    }
}