<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Retrieves the promotions that meet the criteria set in the given selector.
 *
 * @param selector the selector specifying the AdWords Express promotion to return
 *
 * @return list of AdWords Express promotion identified by the selector
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class PromotionServiceGet
{
    /**
     * @access public
     * @var Selector
     */
    public $selector;

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
        return "";
    }

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}