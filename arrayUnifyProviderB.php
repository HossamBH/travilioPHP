<?php
    function arrayUnifyProviderB($response)
    {
        foreach($response as $key => $value){
            $result[$key]->Hotel = $value->hotelName;
            $result[$key]->Rate = strlen($value->Rate);
            $result[$key]->Price = $value->Price;
            $result[$key]->Amanities = implode(",", $value->amenities);
            if($value->discount){
                    $result[$key]->Discount = $value->discount;
            }         
        }
        return $result;
    }
?>