<?php



/**
 * Information specific to the instream ad format. Instream ads are video ads
 * which play as part of the delivery of video content, either before, during,
 * or after the content itself.
 * @package Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class InStreamAdInfo {

  const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201402";
  const XSI_TYPE = "InStreamAdInfo";

  /**
   * @access public
   * @var integer
   */
  public $maxAdDuration;

  /**
   * @access public
   * @var integer
   */
  public $minAdDuration;

  /**
   * @access public
   * @var integer
   */
  public $medianAdDuration;

  /**
   * @access public
   * @var double
   */
  public $preRollPercent;

  /**
   * @access public
   * @var double
   */
  public $midRollPercent;

  /**
   * @access public
   * @var double
   */
  public $postRollPercent;

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

  public function __construct($maxAdDuration = null, $minAdDuration = null, $medianAdDuration = null, $preRollPercent = null, $midRollPercent = null, $postRollPercent = null) {
    $this->maxAdDuration = $maxAdDuration;
    $this->minAdDuration = $minAdDuration;
    $this->medianAdDuration = $medianAdDuration;
    $this->preRollPercent = $preRollPercent;
    $this->midRollPercent = $midRollPercent;
    $this->postRollPercent = $postRollPercent;
  }
}