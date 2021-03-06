<?php


/**
 * Represents an ad parameter.  Use ad parameters to update numeric values
 * (such as prices or inventory levels) in any line of a text ad, including
 * the destination URL. You can set two <code>AdParam</code> objects
 * (one for each value of {@link #paramIndex}) per ad group
 * <a href="AdGroupCriterionService.Keyword.html">Keyword</a>
 * criterion.
 * <p>When setting or removing an <code>AdParam</code>, it is uniquely
 * identified by the combination of these three fields:</p>
 * <ul>
 * <li><code>adGroupId</code></li>
 * <li><code>criterionId</code></li>
 * <li><code>paramIndex</code></li>
 * </ul>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdParam
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdParam";

    /**
     * @access public
     * @var integer
     */
    public $adGroupId;

    /**
     * @access public
     * @var integer
     */
    public $criterionId;

    /**
     * @access public
     * @var string
     */
    public $insertionText;

    /**
     * @access public
     * @var integer
     */
    public $paramIndex;

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

    public function __construct($adGroupId = null, $criterionId = null, $insertionText = null, $paramIndex = null)
    {
        $this->adGroupId = $adGroupId;
        $this->criterionId = $criterionId;
        $this->insertionText = $insertionText;
        $this->paramIndex = $paramIndex;
    }

}