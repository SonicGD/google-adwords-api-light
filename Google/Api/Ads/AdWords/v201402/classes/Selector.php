<?php


/**
 * A generic selector to specify the type of information to return.
 *
 *
 *
 * Structure to specify an address location.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class Selector
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "Selector";

    /**
     * @access public
     * @var string[]
     */
    public $fields;

    /**
     * @access public
     * @var Predicate[]
     */
    public $predicates;

    /**
     * @access public
     * @var DateRange
     */
    public $dateRange;

    /**
     * @access public
     * @var OrderBy[]
     */
    public $ordering;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct($fields = null, $predicates = null, $dateRange = null, $ordering = null, $paging = null)
    {
        $this->fields = $fields;
        $this->predicates = $predicates;
        $this->dateRange = $dateRange;
        $this->ordering = $ordering;
        $this->paging = $paging;
    }
}