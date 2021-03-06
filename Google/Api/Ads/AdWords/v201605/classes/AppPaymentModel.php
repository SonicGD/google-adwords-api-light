<?php


/**
 * Represents a criterion for targeting paid apps.
 *
 * <p>Possible IDs: {@code 30} ({@code APP_PAYMENT_MODEL_PAID}).</p>
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package    Google_Api_Ads_AdWords_v201605
 * @subpackage v201605
 */
class AppPaymentModel extends Criterion
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201605";
    const XSI_TYPE = "AppPaymentModel";

    /**
     * @access public
     * @var tnsAppPaymentModelAppPaymentModelType
     */
    public $appPaymentModelType;

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

    public function __construct($appPaymentModelType = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->appPaymentModelType = $appPaymentModelType;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }

}