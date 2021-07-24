<?php
    function arrayUnifyProviderA($response)
    {
        foreach($response as $key => $value){
            $result[$key]->Hotel = $value->Hotel;
            $result[$key]->Rate = $value->Rate;
            $result[$key]->Price = $value->Fare;
            $result[$key]->Amanities = $value->roomAmenities;            
        }
        return $result;
    }
?>