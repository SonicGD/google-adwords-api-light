<?php


/**
 * <p>A {@link SearchParameter} for setting the search network. Currently we
 * support two network setting options:
 * <ul>
 * <li>Google search network</li>
 * <li>Google search network and AFS</li>
 * </ul>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package Google_Api_Ads_AdWords_v201509
 * @subpackage v201509
 */
class NetworkSearchParameter extends SearchParameter
{

    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201509";
    const XSI_TYPE = "NetworkSearchParameter";

    /**
     * @access public
     * @var NetworkSetting
     */
    public $networkSetting;

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

    public function __construct($networkSetting = null, $SearchParameterType = null)
    {
        parent::__construct();
        $this->networkSetting = $networkSetting;
        $this->SearchParameterType = $SearchParameterType;
    }

}