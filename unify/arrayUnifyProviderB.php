<?php
namespace unify;

use unify\unifyProviderData;
use stdClass;
require_once('unify/unifyProvider.php');
class providerB implements unifyProviderData{

    public function unifyProviderData($response)
    {
        $result = [];
        foreach($response as $key => $value){
            $result[$key] = new stdclass();
            $result[$key]->Hotel = $value->hotelName;
            $result[$key]->Rate = strlen($value->Rate);
            $result[$key]->Price = $value->Price;
            $result[$key]->Amanities = implode(",", $value->amenities);
            if(array_key_exists('discount', $response[$key])){
                    $result[$key]->Discount = $value->discount;
            }         
        }
        return $result;
    }
}
?>