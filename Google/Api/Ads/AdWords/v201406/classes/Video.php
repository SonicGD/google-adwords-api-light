<?php


  /**
   * Encapsulates a Video media identified by a MediaId.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Video extends Media
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "Video";

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
     * @access public
     * @var string
     */
    public $industryStandardCommercialIdentifier;

    /**
     * @access public
     * @var string
     */
    public $advertisingId;

    /**
     * @access public
     * @var string
     */
    public $youTubeVideoIdString;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

      public function __construct($durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null, $industryStandardCommercialIdentifier = null, $advertisingId = null, $youTubeVideoIdString = null, $mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null)
      {
          parent::__construct();
          $this->durationMillis = $durationMillis;
          $this->streamingUrl = $streamingUrl;
          $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
          $this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
          $this->advertisingId = $advertisingId;
          $this->youTubeVideoIdString = $youTubeVideoIdString;
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
