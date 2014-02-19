<?php


/**
 * A qualified long-valued identity that can identify different types of
 * AdWords entities such as campaigns and ad-groups.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class EntityId
{
    /**
     * @access public
     * @var tnsEntityIdType
     */
    public $type;

    /**
     * @access public
     * @var integer
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
        return "EntityId";
    }

    public function __construct($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
    }
}