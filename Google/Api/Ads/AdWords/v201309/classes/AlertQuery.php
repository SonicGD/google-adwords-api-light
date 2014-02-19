<?php


/**
 * Querying criteria for getting alerts.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AlertQuery
{
    /**
     * @access public
     * @var tnsClientSpec
     */
    public $clientSpec;

    /**
     * @access public
     * @var tnsFilterSpec
     */
    public $filterSpec;

    /**
     * @access public
     * @var tnsAlertType[]
     */
    public $types;

    /**
     * @access public
     * @var tnsAlertSeverity[]
     */
    public $severities;

    /**
     * @access public
     * @var tnsTriggerTimeSpec
     */
    public $triggerTimeSpec;

    /**
     * @access public
     * @var string
     */
    public $triggerTime;

    /**
     * @access public
     * @var integer[]
     */
    public $clientCustomerIds;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "AlertQuery";
    }

    public function __construct(
        $clientSpec = null,
        $filterSpec = null,
        $types = null,
        $severities = null,
        $triggerTimeSpec = null,
        $triggerTime = null,
        $clientCustomerIds = null
    ) {
        $this->clientSpec = $clientSpec;
        $this->filterSpec = $filterSpec;
        $this->types = $types;
        $this->severities = $severities;
        $this->triggerTimeSpec = $triggerTimeSpec;
        $this->triggerTime = $triggerTime;
        $this->clientCustomerIds = $clientCustomerIds;
    }
}