<?php



/**
 * {@link Attribute} type that contains a {@link PlacementType} value.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PlacementTypeAttribute extends Attribute
{
    /**
     * @access public
     * @var tnsSiteConstantsPlacementType
     */
    public $value;

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
        return "PlacementTypeAttribute";
    }

    public function __construct($value = null, $AttributeType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->AttributeType = $AttributeType;
    }
}