<?php


/**
 * <p>This extension is useful for advertisers who wish to provide users with a
 * link that points to the advertiser's mobile application in addition to their
 * website.
 *
 * <p>It is also known as Mobile App Extension.
 *
 * <p>The API allows one InAppLinkExtension per {@code AppStore} per campaign.
 * Only the extension for a given {@code AppStore} will render on the device
 * relevant to that {@code AppStore} (e.g. iPhones for {@code AppStore.ITUNES}
 * and Android phones for {@code AppStore.GOOGLE_PLAY}).
 * <span class="constraint Beta">This is a beta feature.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class InAppLinkExtension extends AdExtension
{
    /**
     * @access public
     * @var string
     */
    public $inAppLinkText;

    /**
     * @access public
     * @var string
     */
    public $inAppLinkUrl;

    /**
     * @access public
     * @var tnsInAppLinkExtensionAppStore
     */
    public $appStore;

    /**
     * @access public
     * @var string
     */
    public $appId;

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
        return "InAppLinkExtension";
    }

    public function __construct(
        $inAppLinkText = null,
        $inAppLinkUrl = null,
        $appStore = null,
        $appId = null,
        $id = null,
        $AdExtensionType = null
    ) {
        parent::__construct();
        $this->inAppLinkText = $inAppLinkText;
        $this->inAppLinkUrl = $inAppLinkUrl;
        $this->appStore = $appStore;
        $this->appId = $appId;
        $this->id = $id;
        $this->AdExtensionType = $AdExtensionType;
    }
}