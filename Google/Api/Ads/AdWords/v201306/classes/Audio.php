<?php

/**
 * Encapsulates an Audio media identified by a MediaId.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Audio extends Media
{
    /**
     * @access public
     * @var integer
     */
    public $durationMillis;

    /**
     * @access public
     * @var string
     */
    public $streamingUrl;

    /**
     * @access public
     * @var boolean
     */
    public $readyToPlayOnTheWeb;

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
        return "Audio";
    }

    public function __construct(
        $durationMillis = null,
        $streamingUrl = null,
        $readyToPlayOnTheWeb = null,
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
        $this->durationMillis = $durationMillis;
        $this->streamingUrl = $streamingUrl;
        $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
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