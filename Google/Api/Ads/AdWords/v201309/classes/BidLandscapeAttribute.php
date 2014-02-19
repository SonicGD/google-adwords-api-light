<?php


/**
 * {@link Attribute} type that contains a {@link BidLandscape} value.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BidLandscapeAttribute extends Attribute
{
    /**
     * @access public
     * @var BidLandscape
     */
    public $value;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "BidLandscapeAttribute";
    }

    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }
}