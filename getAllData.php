<?php
    require 'vendor/autoload.php';
    require 'getProviderData.php';

    function getAllData($requestData)
    {
        // get data of provider A
        $url = "http://www.mocky.io/v2/5e400f423300005500b04d0c";
        $result[] = getProviderData($requestData, $url);

        // get data of provider B
        $url = "http://www.mocky.io/v2/5e4010ad3300004200b04d15";
        $requestData = [
            'from_date' => $requestData['dateFrom'],
            'to_date' => $requestData['dateTo'],
            'city_code' => $requestData['city'],
            'no_adults' => $requestData['adults'],
        ];
        $result[] = getProviderData($requestData, $url);

        return $result;
    }
?>