<?php
require 'vendor/autoload.php';

class getData{
    public function getAllData($requestData)
    {
        // get data of provider A
        $url = "http://www.mocky.io/v2/5e400f423300005500b04d0c";
        $result[] = $this->getProviderData($requestData, $url);

        // get data of provider B
        $url = "http://www.mocky.io/v2/5e4010ad3300004200b04d15";

        $requestData = [
            'from_date' => $requestData['dateFrom'],
            'to_date' => $requestData['dateTo'],
            'city_code' => $requestData['city'],
            'no_adults' => $requestData['adults'],
        ];
        $result[] = $this->getProviderData($requestData, $url);

        return $result;
    }

    public function getProviderData($requestData, $url)
    {
        $client = new \GuzzleHttp\Client();
        $options = [
            'form_params' => $requestData
        ]; 
        $response = $client->post($url, $options);
        $providerA = json_decode($response->getBody());
        return $providerA;
    }
}
?>