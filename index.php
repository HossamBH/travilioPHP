<?php
namespace App;

require('getData/getAllData.php');
require_once('unify/arrayUnifyProviderA.php');
require_once('unify/arrayUnifyProviderB.php');

class mainA{
    public static function main(){
        // declare data
        $requestData = [
            'dateForm' => '2/21/2021',
            'dateTo' => '2/25/2021',
            'city' => 3,
            'adults' => 5
        ];

        // get all data
        $getData = new getData;
        $getAllData = $getData->getAllData($requestData);

        //unify the data
        $arrProviderA = arrayUnifyProviderA($getAllData[0]);
        $arrProviderB = arrayUnifyProviderB($getAllData[1]);

        //merge the arrays together and print the result
        return array_merge($arrProviderA,$arrProviderB);
    }
}

$printData = mainA::main();
print_r($printData);

?>