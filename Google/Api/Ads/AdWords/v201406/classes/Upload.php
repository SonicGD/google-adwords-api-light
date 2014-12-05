<?php


  /**
   * Uploads new media. Currently, you can only upload {@link Image} files.
   *
   * @param media A list of {@code Media} objects, each containing the data to
   * be uploaded.
   * @return A list of uploaded media in the same order as the argument list.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class Upload
  {
      const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
      const XSI_TYPE = "";

    /**
     * @access public
     * @var Media[]
     */
    public $media;

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

      public function __construct($media = null)
      {
          $this->media = $media;
      }
  }
