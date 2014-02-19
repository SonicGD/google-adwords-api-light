<?php


/**
 * Results of a {@link ManagedCustomerService#mutateLink} call which changes
 * manager/client links.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MutateLinkResults
{
    /**
     * @access public
     * @var ManagedCustomerLink[]
     */
    public $links;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "MutateLinkResults";
    }

    public function __construct($links = null)
    {
        $this->links = $links;
    }
}