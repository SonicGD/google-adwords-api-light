<?php


/**
 * An enumeration of possible values to be used in conjunction with the
 * {@link CompetitionSearchParameter} to specify the granularity of
 * competition to be filtered.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CompetitionSearchParameterLevel
{
    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "CompetitionSearchParameter.Level";
    }

    public function __construct()
    {
    }
}