<?php


/**
 * Signals that too many criteria were added to some ad group.
 *
 *
 *
 * Base error class for Ad Group Criterion Service.
 * @package    Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupCriterionLimitExceeded extends EntityCountLimitExceeded
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdGroupCriterionLimitExceeded";

    /**
     * @access public
     * @var tnsAdGroupCriterionLimitExceededCriteriaLimitType
     */
    public $limitType;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return self::XSI_TYPE;
    }

    public function __construct(
        $limitType = null,
        $reason = null,
        $enclosingId = null,
        $limit = null,
        $accountLimitType = null,
        $existingCount = null
    ) {
        parent::__construct();
        $this->limitType = $limitType;
        $this->reason = $reason;
        $this->enclosingId = $enclosingId;
        $this->limit = $limit;
        $this->accountLimitType = $accountLimitType;
        $this->existingCount = $existingCount;
    }

}