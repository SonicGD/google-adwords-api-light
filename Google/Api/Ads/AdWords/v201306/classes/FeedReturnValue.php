<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * The result of a call to FeedService#mutate.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var Feed[]
     */
    public $value;

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

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}