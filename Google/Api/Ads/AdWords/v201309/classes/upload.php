<?php


/**
 * Uploads new media. Currently, you can only upload {@link Image} files.
 *
 * @param media A list of {@code Media} objects, each containing the data to
 * be uploaded.
 *
 * @return A list of uploaded media in the same order as the argument list.
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class upload
{
    /**
     * @access public
     * @var Media[]
     */
    public $media;

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
        return "";
    }

    public function __construct($media = null)
    {
        $this->media = $media;
    }
}