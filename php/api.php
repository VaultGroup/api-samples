<?php

class VaultREAPI {

    private $base_url = 'https://ap-southeast-2.api.vaultre.com.au/api/v1.3';

    public function __construct($api_key, $bearer_token) {
        $this->api_key = $api_key;
        $this->bearer_token = $bearer_token;
    }

    private function get_url($url) {
        return (strpos($url, $this->base_url) !== false) ? $url : $this->base_url . $url;
    }

    public function get($endpoint) {
        $ch = curl_init($this->get_url($endpoint));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'X-Api-Key: ' . $this->api_key, 'Authorization: Bearer ' . $this->bearer_token));
        $result = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return array($response_code, $result);
    }

    public function post($endpoint, $payload) {
        $ch = curl_init($this->get_url($endpoint));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Accept: application/json', 'Content-Type: application/json', 'X-Api-Key: ' . $this->api_key, 'Authorization: Bearer ' . $this->bearer_token));
        $result = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return array($response_code, $result);
    }

    public function put($endpoint, $payload) {
        $ch = curl_init($this->get_url($endpoint));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Accept: application/json', 'Content-Type: application/json', 'X-Api-Key: ' . $this->api_key, 'Authorization: Bearer ' . $this->bearer_token));
        $result = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return array($response_code, $result);
    }

    public function delete($endpoint) {
        $ch = curl_init($this->get_url($endpoint));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Accept: application/json', 'Content-Type: application/json', 'X-Api-Key: ' . $this->api_key, 'Authorization: Bearer ' . $this->bearer_token));
        $result = curl_exec($ch);
        $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return array($response_code, $result);
    }

}

?>
