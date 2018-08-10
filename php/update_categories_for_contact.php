#!/usr/bin/env php
<?php

require_once 'api.php';

$api_key = $argv[1];
$access_token = $argv[2];
$contactid = $argv[3];

if (!$api_key || !$access_token) {
    echo "Usage: update_categories_for_contact.php <api_key> <access_token> <contactid>\n";
    exit();
}

$api = new VaultREAPI($api_key, $access_token);

// Update categories for contact

$categories = array(array("id" => 1076));
$data = json_encode(array("items" => $categories));

list($code, $result) = $api->put('/contacts/' . $contactid . '/categories', $data);

if ($code == 403) {
    echo "HTTP 403: Invalid API Key";
    exit();
} elseif ($code == 401) {
    echo "HTTP 401: Invalid bearer token\n";
    exit();
}

echo $result;

?>
