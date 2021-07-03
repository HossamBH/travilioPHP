<?php

require('getAllData.php');
require_once('arrayUnifyProviderA.php');
require_once('arrayUnifyProviderB.php');

// declare data
$requestData = [
    'dateForm' => '2/21/2021',
    'dateTo' => '2/25/2021',
    'city' => 3,
    'adults' => 5
];

// get all data
$getAllData = getAllData($requestData);

//unify the data
$arrProviderA = arrayUnifyProviderA($getAllData[0]);
$arrProviderB = arrayUnifyProviderB($getAllData[1]);

//merge the arrays together and print the result
print_r(array_merge($arrProviderA,$arrProviderB));

?>