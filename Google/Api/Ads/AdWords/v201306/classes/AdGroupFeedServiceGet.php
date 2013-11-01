<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of AdGroupFeeds that meet the selector criteria.
 *
 * @param selector Determines which AdGroupFeeds to return. If empty all
 *                 adgroup feeds are returned.
 *
 * @return The list of AdgroupFeeds.
 * @throws ApiException Indicates a problem with the request.
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupFeedServiceGet
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