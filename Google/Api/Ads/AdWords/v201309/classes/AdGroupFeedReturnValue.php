<?php


/**
 * The result of a call to AdGroupFeedService#mutate.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AdGroupFeedReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var AdGroupFeed[]
     */
    public $value;

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
        return "AdGroupFeedReturnValue";
    }

    public function __construct($value = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}