<?php
    // get the different between start date and end date
    function getDays($fromDate, $toDate)
    {
        $fromDate = strtotime($fromDate);
        $toDate = strtotime($toDate);
        $days = abs($fromDate - $toDate);
        $daysDiff = floor($days / (60*60*24));
        return $daysDiff;
    }
?>