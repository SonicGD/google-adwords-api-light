<?php



/**
 * Represents the mobile application to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 *
 *
 *
 * Errors that are thrown when a non-AdX feature is accessed by an AdX customer.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MobileApplication extends Criterion
{
    /**
     * @access public
     * @var string
     */
    public $appId;

    /**
     * @access public
     * @var string
     */
    public $displayName;

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
        return "MobileApplication";
    }

    public function __construct($appId = null, $displayName = null, $id = null, $type = null, $CriterionType = null)
    {
        parent::__construct();
        $this->appId = $appId;
        $this->displayName = $displayName;
        $this->id = $id;
        $this->type = $type;
        $this->CriterionType = $CriterionType;
    }
}