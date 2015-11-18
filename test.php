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
$settingsFile = "settings.ini";
$user = new AdWordsUser(
    '',
    null,
    null,
    null,
    null,
    null,
    null,
    $settingsFile,
    null
);

$user->SetClientCustomerId(0);
$campaignService = $user->GetService('CampaignService', 'v201509');
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
