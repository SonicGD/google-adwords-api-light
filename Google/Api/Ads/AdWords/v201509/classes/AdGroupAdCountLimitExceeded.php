<?php


/**
 * Indicates too many ads were added/enabled under the specified adgroup.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class AdGroupAdCountLimitExceeded extends EntityCountLimitExceeded
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201509";
    const XSI_TYPE = "AdGroupAdCountLimitExceeded";

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

    public function __construct($reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null)
    {
        parent::__construct();
        $this->reason = $reason;
        $this->enclosingId = $enclosingId;
        $this->limit = $limit;
        $this->accountLimitType = $accountLimitType;
        $this->existingCount = $existingCount;
    }

}