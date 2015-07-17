<?php


/**
 * The results of a simple mutation job.
 * @package    Google_Api_Ads_AdWords_v201506
 * @subpackage v201506
 */
class SimpleMutateResult
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201506";
    const XSI_TYPE = "SimpleMutateResult";

    /**
     * @access public
     * @var Operand[]
     */
    public $results;

    /**
     * @access public
     * @var ApiError[]
     */
    public $errors;

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

    public function __construct($results = null, $errors = null)
    {
        $this->results = $results;
        $this->errors = $errors;
    }

}