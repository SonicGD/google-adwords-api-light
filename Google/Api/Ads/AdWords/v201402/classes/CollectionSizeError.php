<?php


/**
 * Errors associated with the size of the given collection being
 * out of bounds.
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    Google_Api_Ads_AdWords_v201402
 * @subpackage v201402
 */
class CollectionSizeError extends ApiError
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201402";
    const XSI_TYPE = "CollectionSizeError";

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

    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
        parent::__construct();
        $this->fieldPath = $fieldPath;
        $this->trigger = $trigger;
        $this->errorString = $errorString;
        $this->ApiErrorType = $ApiErrorType;
    }
}