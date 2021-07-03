<?php
    function getAllData($requestData)
    {
        // provider A
        $url = 'http://www.mocky.io/v2/5e400f423300005500b04d0c';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS,$requestData);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $providerA = json_decode(curl_exec($curl));
        curl_close($curl);
        $result[] = $providerA;

        $requestData = [
            'from_date' => $requestData['dateFrom'],
            'to_date' => $requestData['dateTo'],
            'city_code' => $requestData['city'],
            'no_adults' => $requestData['adults'],
        ];
        
        $url = 'http://www.mocky.io/v2/5e4010ad3300004200b04d15';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS,$requestData);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $providerB = json_decode(curl_exec($curl));
        curl_close($curl);
        $result[] = $providerB;
        return $result;
    }
?>