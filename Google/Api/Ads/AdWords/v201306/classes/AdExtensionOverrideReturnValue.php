<?php

/**
 * A container for return values from AdExtensionOverrideService.mutate().
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverrideReturnValue extends ListReturnValue
{
    /**
     * @access public
     * @var AdExtensionOverride[]
     */
    public $value;

    /**
     * @access public
     * @var ApiError[]
     */
    public $partialFailureErrors;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201306";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "AdExtensionOverrideReturnValue";
    }

    public function __construct($value = null, $partialFailureErrors = null, $ListReturnValueType = null)
    {
        parent::__construct();
        $this->value = $value;
        $this->partialFailureErrors = $partialFailureErrors;
        $this->ListReturnValueType = $ListReturnValueType;
    }
}