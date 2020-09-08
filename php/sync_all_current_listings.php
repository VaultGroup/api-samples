#!/usr/bin/env php
<?php

require_once 'api.php';

$api_key = $argv[1];
$access_token = $argv[2];

if (!$api_key || !$access_token) {
    echo "Usage: " . basename(__FILE__) . " <api_key> <access_token>\n";
    exit();
}

// These are the classifications and types we will loop through
$endpoints = array(
    ["residential", "sale"],
    ["residential", "lease"],
    ["commercial", "sale"],
    ["commercial", "lease"],
    ["rural", "sale"],
    ["business", "sale"],
    ["land", "sale"],
    ["holidayRental", "lease"],
);

// Create a new instance of the API client
$api = new VaultREAPI($api_key, $access_token);

// Loop through each set of classification/salelease paths
foreach ($endpoints as $endpoint) {

    $classification = $endpoint[0];
    $salelease = $endpoint[1];

    $next_url = '/properties/' . $classification . '/' . $salelease . '/available?pagesize=100';

    // And now loop through each returned page of results
    do {

        list($code, $result) = $api->get($next_url);

        if ($code == 403) {
            echo "HTTP 403: Invalid API Key";
            exit();
        } elseif ($code == 401) {
            echo "HTTP 401: Invalid bearer token\n";
            exit();
        }

        try {
            $result = json_decode($result);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            exit();
        }

        foreach (@$result->{"items"} as $item) {
             // Do something with the returned data
             echo "ID: " . $item->{"id"} . "\nAddress: " . $item->{"displayAddress"} . "\n\n";
        }

        // Get the url of the next page if available
        $next_url = $result->{"urls"}->{"next"};

    } while ($next_url);

}

?>
