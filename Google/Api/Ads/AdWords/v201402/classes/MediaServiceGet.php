<?php



/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * 
 * 
 * 
 * Returns a list of media that meet the criteria specified by the selector.
 * <p class="note"><b>Note:</b> {@code MediaService} will not return any
 * {@link ImageAd} image files.</p>
 * 
 * @param serviceSelector Selects which media objects to return.
 * @return A list of {@code Media} objects.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class MediaServiceGet {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
  const XSI_TYPE = "";

  /**
   * @access public
   * @var Selector
   */
  public $serviceSelector;

  /**
   * Gets the namesapce of this class
   * @return the namespace of this class
   */
  public function getNamespace() {
    return self::WSDL_NAMESPACE;
  }

  /**
   * Gets the xsi:type name of this class
   * @return the xsi:type name of this class
   */
  public function getXsiTypeName() {
    return self::XSI_TYPE;
  }

  public function __construct($serviceSelector = null) {
    $this->serviceSelector = $serviceSelector;
  }
}