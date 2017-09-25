<?php

require_once '../vendor/autoload.php';

use AloPeyk\Exception\AloPeykApiException;
use AloPeyk\Model\Location;

$apiResponse = null;
try {
    // $locationName = null;   // returns AloPeyk Exception
    // $locationName = '';     // returns AloPeyk Exception
    $locationName = "أرژ";
    $apiResponse = Location::getSuggestions($locationName);
} catch (AloPeykApiException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

if ($apiResponse && $apiResponse->status == "success") {
    $locations = $apiResponse->object;
    echo "<ol>";
    foreach ($locations as $location) {
        echo "<li>";
        echo $location->region . ": " . $location->title;
        echo "</li>";
    }
    echo "</ol>";
}

// SAMPLE API RESPONSE: ------------------------------------------------------------------------------------------------
//{
//  "status": "success",
//  "message": "autoComplete",
//  "object": [
//    {
//      "title": "میدان آرژانتین",
//      "region": "آرژانتین",
//      "lat": "35.737079296849799",
//      "lng": "51.415392387445699",
//      "district": "منطقه ۶",
//      "city": "tehran"
//    },
//    {
//      "title": "آرژانتین",
//      "region": "میدان ولی عصر",
//      "lat": "35.703254842325698",
//      "lng": "51.413370921404997",
//      "district": "منطقه ۶",
//      "city": "tehran"
//    },
//    {
//      "title": "ارژنگ",
//      "region": "آذربایجان",
//      "lat": "35.69489505",
//      "lng": "51.3973145",
//      "district": "منطقه ۱۱",
//      "city": "tehran"
//    },
//    {
//      "title": "ارژنگ",
//      "region": "پارک لاله",
//      "lat": "35.712177826056703",
//      "lng": "51.406424628191502",
//      "district": "منطقه ۶",
//      "city": "tehran"
//    }
//  ]
//}