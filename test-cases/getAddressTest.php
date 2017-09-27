<?php

require_once '../vendor/autoload.php';

use AloPeyk\Model\Location;


$apiResponse = Location::getAddress("35.732595", "51.413379");

if ($apiResponse && $apiResponse->status == "success") {
    echo $apiResponse->object->district;
}







/* ----------------------------------------------------- *
 * SAMPLE API RESPONSE:
 * ----------------------------------------------------- */
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