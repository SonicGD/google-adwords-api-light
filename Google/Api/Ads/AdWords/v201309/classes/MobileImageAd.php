<?php


/**
 * Represents a mobile image ad.
 *
 * <p>For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.</p>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MobileImageAd extends Ad
{
    /**
     * @access public
     * @var tnsMarkupLanguageType[]
     */
    public $markupLanguages;

    /**
     * @access public
     * @var string[]
     */
    public $mobileCarriers;

    /**
     * @access public
     * @var Image
     */
    public $image;

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
        return "MobileImageAd";
    }

    public function __construct(
        $markupLanguages = null,
        $mobileCarriers = null,
        $image = null,
        $id = null,
        $url = null,
        $displayUrl = null,
        $devicePreference = null,
        $AdType = null
    ) {
        parent::__construct();
        $this->markupLanguages = $markupLanguages;
        $this->mobileCarriers = $mobileCarriers;
        $this->image = $image;
        $this->id = $id;
        $this->url = $url;
        $this->displayUrl = $displayUrl;
        $this->devicePreference = $devicePreference;
        $this->AdType = $AdType;
    }
}