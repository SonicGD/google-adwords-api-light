<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * A FeedMapping represents a mapping between feed attributes in a specific feed
 * and placeholder fields for a specific placeholder type. This will tell the
 * ads serving system which parts of the feed item should be used when
 * populating a placeholder. Without this mapping the placeholder cannot be
 * populated and the extension can not be displayed.
 *
 * <p>For a list of feed placeholders, see
 * <a href="/adwords/api/docs/appendix/placeholders">
 * https://developers.google.com/adwords/api/docs/appendix/placeholders
 * </a></p>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedMapping
{
    /**
     * @access public
     * @var integer
     */
    public $feedMappingId;

    /**
     * @access public
     * @var integer
     */
    public $feedId;

    /**
     * @access public
     * @var integer
     */
    public $placeholderType;

    /**
     * @access public
     * @var tnsFeedMappingStatus
     */
    public $status;

    /**
     * @access public
     * @var AttributeFieldMapping[]
     */
    public $attributeFieldMappings;

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

    public function __construct(
        $feedMappingId = null,
        $feedId = null,
        $placeholderType = null,
        $status = null,
        $attributeFieldMappings = null
    ) {
        $this->feedMappingId = $feedMappingId;
        $this->feedId = $feedId;
        $this->placeholderType = $placeholderType;
        $this->status = $status;
        $this->attributeFieldMappings = $attributeFieldMappings;
    }
}