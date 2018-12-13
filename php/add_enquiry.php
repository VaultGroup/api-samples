#!/usr/bin/env php
<?php

require_once 'api.php';

$api_key = $argv[1];
$access_token = $argv[2];

if (!$api_key || !$access_token) {
    echo "Usage: add_contact.php <api_key> <access_token>\n";
    exit();
}

$api = new VaultREAPI($api_key, $access_token);

// Add enquiry

$data = json_encode(
    array(
        "enquiryDate" => "2018-12-13T11:11:36+08:00",
        "subject" => "demorealestate.com.au enquiry for 1 Smith St, SUBIACO",
        "body" => "Can you please provide a price guide and advise when the next open home is scheduled?",
        "originalId" => "01e32301-1cf3-4130-92d6-e4da1ef57835",
        "propertyReference" => "L1234",
        "source" => "OFFICEWEBSITE",
        "email" => "matt@vaultrealestate.com.au",
        "fullName" => "Matt Healy",
        "mobile" => "0400 000 000"
    )
);

list($code, $result) = $api->post('/enquiries', $data);

if ($code == 403) {
    echo "HTTP 403: Invalid API Key";
    exit();
} elseif ($code == 401) {
    echo "HTTP 401: Invalid bearer token\n";
    exit();
}

$result = json_decode($result);

echo "New enquiry ID: " . $result->{"id"} . "\n";

?>
