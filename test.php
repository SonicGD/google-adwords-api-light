<?php

/**
 *
 * PHP version 5
 *
 * Created by PhpStorm.
 * User: Георгий
 * Date: 30.10.13
 * Time: 22:44
 */
require_once 'vendor/autoload.php';
$settingsFile = "/var/www/cg2/common/config/adwapi/settings.ini";
$user = new AdWordsUser(
    '/var/www/cg2/common/config/adwapi/auth.ini',
    null,
    null,
    null,
    null,
    null,
    null,
    $settingsFile,
    null
);

$user->SetClientCustomerId(7141094402);
$campaignService = $user->GetService('CampaignService', 'v201409');
$selector = new Selector();
$selector->fields = [
    'Id',
    'Name',
    'Status',
    'ServingStatus',
    'StartDate',
    'EndDate',
    'Amount',
    'BudgetId',
    'TargetGoogleSearch',
    'TargetSearchNetwork',
    'TargetContentNetwork',
    'TargetPartnerSearchNetwork',
];

$result = $campaignService->get($selector);
var_dump($result);
