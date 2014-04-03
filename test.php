<?php
define('ADWORDS_VERSION', 'v201402');
define('SRC_PATH', dirname(__FILE__) . '/');
define('LIB_PATH', 'Google/Api/Ads/AdWords/Lib');
define('UTIL_PATH', 'Google/Api/Ads/Common/Util');
define('ADWORDS_UTIL_PATH', 'Google/Api/Ads/AdWords/Util');
include('vendor/autoload.php');

/**
 *
 * PHP version 5
 *
 * Created by PhpStorm.
 * User: Георгий
 * Date: 30.10.13
 * Time: 22:44
 */

$user = new AdWordsUser();

function getAdGroups($user, $dateRange)
{
    /**
     * @var AdGroupService $adGroupService
     */
    $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);

    // Create selector.
    $selector = new Selector();

    $selector->fields = [
        'Id',
        'Name',
        'BiddingStrategyType'
    ];

    $selector->dateRange = $dateRange;
    /**
     * @var AdGroup[] $groups
     */

    return $adGroupService->get($selector)->entries;

}

$date = date('Ymd');
$dateRange = new DateRange();
$dateRange->min = $date;
$dateRange->max = $date;
$user->SetClientCustomerId("3599097853");
$groups = getAdGroups($user, $dateRange, 0, 0);
var_dump($groups);