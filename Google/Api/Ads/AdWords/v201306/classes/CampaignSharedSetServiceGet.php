<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of CampaignSharedSets based on the given selector.
 *
 * @param selector the selector specifying the query
 *
 * @return a list of CampaignSharedSet entities that meet the criterion specified
 * by the selector
 * @throws ApiException
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignSharedSetServiceGet
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

    public function __construct($selector = null)
    {
        $this->selector = $selector;
    }
}