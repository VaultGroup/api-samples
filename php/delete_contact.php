#!/usr/bin/env php
<?php

require_once 'api.php';

$api_key = $argv[1];
$access_token = $argv[2];
$contactid = $argv[3];

if (!$api_key || !$access_token) {
    echo "Usage: delete_contact.php <api_key> <access_token> <contactid>\n";
    exit();
}

$api = new VaultREAPI($api_key, $access_token);

// Delete contact
list($code, $result) = $api->delete('/contacts/' . $contactid);

if ($result) {
    echo $result;
}

if ($code == 403) {
    echo "HTTP 403: Forbidden";
    exit();
} elseif ($code == 401) {
    echo "HTTP 401: Invalid bearer token\n";
    exit();
} elseif ($code == 204) {
    echo "Record deleted successfully\n";
}


?>
