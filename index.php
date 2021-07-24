<?php

require('getData/getAllData.php');
require('unify/arrayUnifyProviderA.php');
require('unify/arrayUnifyProviderB.php');

class mainA{
    public static function main(){
        // declare data
        $requestData = [
            'dateFrom' => '2/21/2021',
            'dateTo' => '2/25/2021',
            'city' => 3,
            'adults' => 5
        ];

        // get all data
        $getData = new getData;
        $getAllData = $getData->getAllData($requestData);

        //unify the data
        $providerA = new providerA;
        $providerB = new providerB;
        $arrProviderA = $providerA->unifyProviderData($getAllData[0]);
        $arrProviderB = $providerB->unifyProviderData($getAllData[1]);

        //merge the arrays together and print the result
        return array_merge($arrProviderA,$arrProviderB);
    }
}

$printData = mainA::main();
print_r($printData);

?>