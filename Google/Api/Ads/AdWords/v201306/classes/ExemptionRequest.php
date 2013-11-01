<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A request to be exempted from a {@link PolicyViolationError}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExemptionRequest
{
    /**
     * @access public
     * @var PolicyViolationKey
     */
    public $key;

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

    public function __construct($key = null)
    {
        $this->key = $key;
    }
}