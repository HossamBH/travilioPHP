<?php
    require 'vendor/autoload.php';

    function getProviderData($requestData, $url)
    {
        $client = new \GuzzleHttp\Client();
        $options = [
            'form_params' => $requestData
        ]; 
        $response = $client->post($url, $options);
        $providerA = json_decode($response->getBody());
        return $providerA;
    }
?>