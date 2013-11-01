<?php

namespace Google\Api\Ads\AdWords\v201306\classes;


/**
 * Encapsulates an Image media. For {@code SET},{@code REMOVE} operations in
 * MediaService, use {@code mediaId}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Image extends Media
{
    /**
     * @access public
     * @var base64Binary
     */
    public $data;

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
        $data = null,
        $mediaId = null,
        $type = null,
        $referenceId = null,
        $dimensions = null,
        $urls = null,
        $mimeType = null,
        $sourceUrl = null,
        $name = null,
        $fileSize = null,
        $creationTime = null,
        $MediaType = null
    ) {
        parent::__construct();
        $this->data = $data;
        $this->mediaId = $mediaId;
        $this->type = $type;
        $this->referenceId = $referenceId;
        $this->dimensions = $dimensions;
        $this->urls = $urls;
        $this->mimeType = $mimeType;
        $this->sourceUrl = $sourceUrl;
        $this->name = $name;
        $this->fileSize = $fileSize;
        $this->creationTime = $creationTime;
        $this->MediaType = $MediaType;
    }
}