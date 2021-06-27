<?php

require_once('diffDate.php');
require_once('getResponse.php');

// request declaration
$fromDate = '2/21/2021';
$toDate = '2/25/2021';
$cityCode = 3;
$adults = 3;

// get the different between start date and end date
$daysDiff = getDays($fromDate, $toDate);

// get the response and print
$result = getHotels($daysDiff, $cityCode, $adults);
echo "<pre>";echo json_encode($result, JSON_PRETTY_PRINT);

?>