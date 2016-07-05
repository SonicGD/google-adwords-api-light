<?php


/**
 * Represents categories that AdWords finds automatically for your website.
 *
 * <p>
 * No categories available means that AdWords couldn't automatically find categories for your
 * website. To control how categories are assigned, manually add breadcrumbs to your webpages.
 *
 * <p>
 * Categories can be filtered by domain name or by a set of campaign IDs.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class DomainCategory extends DimensionProperties
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "DomainCategory";

    /**
     * @access public
     * @var string
     */
    public $category;

    /**
     * @access public
     * @var double
     */
    public $coverage;

    /**
     * @access public
     * @var string
     */
    public $domainName;

    /**
     * @access public
     * @var string
     */
    public $isoLanguage;

    /**
     * @access public
     * @var Money
     */
    public $recommendedCpc;

    /**
     * @access public
     * @var boolean
     */
    public $hasChild;

    /**
     * @access public
     * @var integer
     */
    public $categoryRank;

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

    public function __construct(
        $category = null,
        $coverage = null,
        $domainName = null,
        $isoLanguage = null,
        $recommendedCpc = null,
        $hasChild = null,
        $categoryRank = null,
        $levelOfDetail = null
    ) {
        parent::__construct();
        $this->category = $category;
        $this->coverage = $coverage;
        $this->domainName = $domainName;
        $this->isoLanguage = $isoLanguage;
        $this->recommendedCpc = $recommendedCpc;
        $this->hasChild = $hasChild;
        $this->categoryRank = $categoryRank;
        $this->levelOfDetail = $levelOfDetail;
    }

}