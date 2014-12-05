<?php


  /**
   * Represents some kind of media.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Media
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "Media";

    /**
     * @access public
     * @var integer
     */
    public $mediaId;

    /**
     * @access public
     * @var tnsMediaMediaType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $referenceId;

    /**
     * @access public
     * @var Media_Size_DimensionsMapEntry[]
     */
    public $dimensions;

    /**
     * @access public
     * @var Media_Size_StringMapEntry[]
     */
    public $urls;

    /**
     * @access public
     * @var tnsMediaMimeType
     */
    public $mimeType;

    /**
     * @access public
     * @var string
     */
    public $sourceUrl;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var integer
     */
    public $fileSize;

    /**
     * @access public
     * @var string
     */
    public $creationTime;

    /**
     * @access public
     * @var string
     */
    public $MediaType;
      private $_parameterMap = array(
      "Media.Type" => "MediaType",
    );

    /**
     * Provided for setting non-php-standard named variables
     * @param $var Variable name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        $this->{$this->_parameterMap[$var]} = $value;
    }

    /**
     * Provided for getting non-php-standard named variables
     * @param $var Variable name to get
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (!isset($this->_parameterMap[$var])) {
            return null;
        }

        return $this->{$this->_parameterMap[$var]};
    }

    /**
     * Provided for getting non-php-standard named variables
     * @return array parameter map
     */
    protected function getParameterMap()
    {
        return $this->_parameterMap;
    }

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

      public function __construct($mediaId = null, $type = null, $referenceId = null, $dimensions = null, $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null)
      {
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
