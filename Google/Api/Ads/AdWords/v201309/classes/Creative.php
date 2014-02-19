<?php


/**
 * Creative for a text ad.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Creative
{
    /**
     * @access public
     * @var string
     */
    public $headline;

    /**
     * @access public
     * @var string
     */
    public $line1;

    /**
     * @access public
     * @var string
     */
    public $line2;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/express/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Creative";
    }

    public function __construct($headline = null, $line1 = null, $line2 = null)
    {
        $this->headline = $headline;
        $this->line1 = $line1;
        $this->line2 = $line2;
    }
}