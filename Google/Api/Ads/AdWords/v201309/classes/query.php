<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of campaigns that match the query.
 *
 * @param query The SQL-like AWQL query string.
 *
 * @return A list of campaigns.
 * @throws ApiException if problems occur while parsing the query or fetching campaign
 * information.
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class query
{
    /**
     * @access public
     * @var string
     */
    public $query;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($query = null)
    {
        $this->query = $query;
    }
}