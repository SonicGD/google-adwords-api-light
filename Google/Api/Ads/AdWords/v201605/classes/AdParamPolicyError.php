<?php


/**
 * Policy violation for an AdParam.
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AdParamPolicyError extends PolicyViolationError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AdParamPolicyError";

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
        $key = null,
        $externalPolicyName = null,
        $externalPolicyUrl = null,
        $externalPolicyDescription = null,
        $isExemptable = null,
        $violatingParts = null
    ) {
        parent::__construct();
        $this->key = $key;
        $this->externalPolicyName = $externalPolicyName;
        $this->externalPolicyUrl = $externalPolicyUrl;
        $this->externalPolicyDescription = $externalPolicyDescription;
        $this->isExemptable = $isExemptable;
        $this->violatingParts = $violatingParts;
    }

}