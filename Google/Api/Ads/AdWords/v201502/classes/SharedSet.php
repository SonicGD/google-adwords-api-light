<?php


/**
 * SharedSets are used for sharing entities across multiple campaigns
 * under the same account.
 * @package    Google_Api_Ads_AdWords_v201502
 * @subpackage v201502
 */
class SharedSet
{
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201502";
    const XSI_TYPE = "SharedSet";

    /**
     * @access public
     * @var integer
     */
    public $sharedSetId;

    /**
     * @access public
     * @var string
     */
    public $name;

    /**
     * @access public
     * @var tnsSharedSetType
     */
    public $type;

    /**
     * @access public
     * @var integer
     */
    public $memberCount;

    /**
     * @access public
     * @var integer
     */
    public $referenceCount;

    /**
     * @access public
     * @var tnsSharedSetStatus
     */
    public $status;

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
        $sharedSetId = null,
        $name = null,
        $type = null,
        $memberCount = null,
        $referenceCount = null,
        $status = null
    ) {
        $this->sharedSetId = $sharedSetId;
        $this->name = $name;
        $this->type = $type;
        $this->memberCount = $memberCount;
        $this->referenceCount = $referenceCount;
        $this->status = $status;
    }
}
