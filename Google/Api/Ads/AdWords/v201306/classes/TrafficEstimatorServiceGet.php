<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns traffic estimates for specified criteria.
 *
 * @param selector Campaigns, ad groups and keywords for which traffic
 *                 should be estimated.
 *
 * @return Traffic estimation results.
 * @throws ApiException if problems occurred while retrieving estimates
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TrafficEstimatorServiceGet
{
    /**
     * @access public
     * @var TrafficEstimatorSelector
     */
    public $selector;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201306";
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