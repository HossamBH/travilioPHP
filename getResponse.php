<?php

// get the response
function getHotels($daysDiff,$cityCode,$adults)
{
	// dummy data
	$providerA = [
		(object) array('Hotel' => 'A', 'Rate' => 4, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 1000, 'cityCode' => 3),
		(object) array('Hotel' => 'B', 'Rate' => 2, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 1050, 'cityCode' => 2),
		(object) array('Hotel' => 'C', 'Rate' => 5, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 700, 'cityCode' => 1),
		(object) array('Hotel' => 'D', 'Rate' => 3, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 900, 'cityCode' => 3),
		(object) array('Hotel' => 'E', 'Rate' => 3, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 1300, 'cityCode' => 1),
	];

	$providerB = [
		(object) array('Hotel' => 'A', 'Rate' => 4, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 2000, 'cityCode' => 2),
		(object) array('Hotel' => 'B', 'Rate' => 2, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 1100, 'cityCode' => 1),
		(object) array('Hotel' => 'C', 'Rate' => 5, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 1000, 'cityCode' => 3, 'discount' => 10),
		(object) array('Hotel' => 'D', 'Rate' => 3, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 900, 'cityCode' => 2),
		(object) array('Hotel' => 'E', 'Rate' => 3, 'roomAmenities' => 'bla,bla,bla', 'pricePerDay' => 800, 'cityCode' => 1),
	];

	$index = 0;
	$result=array();

	foreach($providerA as $value){
		if($cityCode == $value->cityCode){
			$result[$index]['Hotel'] = $value->Hotel;
			$result[$index]['Rate'] = $value->Rate;
			$result[$index]['Fare'] = $value->pricePerDay * $daysDiff * $adults;
			$result[$index]['roomAmenities'] = $value->roomAmenities;
			$index++;
		}
	}
	
	foreach($providerB as $value){
		
		if($cityCode == $value->cityCode){
			$result[$index]['hotelName'] = $value->Hotel;
			$result[$index]['Rate'] = $value->Rate;
			$result[$index]['Price'] = $value->pricePerDay * $daysDiff * $adults;

			// check if there is a discount and calculate it
			if($value->discount){
				$discountFactor = (100 - $value->discount)/100;
				$result[$index]['Price'] = $value->pricePerDay * $daysDiff * $adults * $discountFactor;
				$result[$index]['discount'] = $value->discount . '%' ; 
			}

			// split the room amenities using the ' , ' as separator
			$roomAmenities = explode(',', $value->roomAmenities);
			$result[$index]['amenities'] = $roomAmenities;
			
			$index++;
		}
	}
	return $result;
}

?>