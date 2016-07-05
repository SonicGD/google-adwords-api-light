<?php


/**
 * Represents a ZIP archive media the content of which contains HTML5 assets.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class MediaBundle extends Media
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "MediaBundle";

    /**
     * @access public
     * @var base64Binary
     */
    public $data;

    /**
     * @access public
     * @var string
     */
    public $mediaBundleUrl;

    /**
     * @access public
     * @var string
     */
    public $entryPoint;

    /**
     * Gets the namesapce of this class
     * @return string the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return string the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $data = null,
        $mediaBundleUrl = null,
        $entryPoint = null,
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
        $this->mediaBundleUrl = $mediaBundleUrl;
        $this->entryPoint = $entryPoint;
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