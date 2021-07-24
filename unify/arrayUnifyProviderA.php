<?php
namespace unify;

use unify\unifyProviderData;
use stdClass;

require_once('unifyProvider.php');
class providerA implements unifyProviderData{

    public function unifyProviderData($response)
    {
        $result = [];
        foreach($response as $key => $value){
            $result[$key] = new stdclass();
            $result[$key]->Hotel = $value->Hotel;
            $result[$key]->Rate = $value->Rate;
            $result[$key]->Price = $value->Fare;
            $result[$key]->Amanities = $value->roomAmenities;            
        }
        return $result;
    }
}
?>