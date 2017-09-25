<?php

require_once '../vendor/autoload.php';

use AloPeyk\Exception\AloPeykApiException;
use AloPeyk\Model\Location;

$apiResponse = null;
try {
    $apiResponse = Location::getAddress("35.732595", "51.413379");
} catch (AloPeykApiException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

if ($apiResponse && $apiResponse->status == "success") {
    echo $apiResponse->object->district;
}

// SAMPLE API RESPONSE: ------------------------------------------------------------------------------------------------
//{
//  "status": "success",
//  "message": "findPlace",
//  "object": {
//    "address": [
//        "چهاردهم",
//           "وزرا",
//          "تهران",
//        ""
//    ],
//    "region": "آرژانتین",
//    "district": "منطقه ۶",
//    "city": "tehran"
//  }
//}