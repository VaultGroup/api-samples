#!/usr/bin/env php
<?php

require_once 'api.php';

$api_key = $argv[1];
$access_token = $argv[2];

if (!$api_key || !$access_token) {
    echo "Usage: get_categories.php <api_key> <access_token>\n";
    exit();
}

$api = new VaultREAPI($api_key, $access_token);

// Get contact categories
list($code, $result) = $api->get('/categories/contact?sort=name');

if ($code == 403) {
    echo "HTTP 403: Invalid API Key";
    exit();
} elseif ($code == 401) {
    echo "HTTP 401: Invalid bearer token\n";
    exit();
}

$result = json_decode($result);

foreach (@$result->{"items"} as $item) {

    echo $item->{"id"} . ": " . $item->{"name"} . "\n";

}

?>
