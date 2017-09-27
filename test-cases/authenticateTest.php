<?php

require_once '../vendor/autoload.php';

use AloPeyk\AloPeykApiHandler;


$apiResponse = AloPeykApiHandler::authenticate();

if ($apiResponse && $apiResponse->status == "success") {
    $user = $apiResponse->object->user;
    echo $user->firstname . " " . $user->lastname;
}







/* ----------------------------------------------------- *
 * SAMPLE API RESPONSE:
 * ----------------------------------------------------- */
//{
//  "status": "success",
//  "object": {
//    "user": {
//        "id": 99,
//      "phone": "09195071197",
//      "firstname": "john",
//      "lastname": "doe",
//      "type": "CUSTOMER",
//      "email": "john_doe@gmail.com",
//      "email_verified": 0,
//      "verify": 1,
//      "found_us": "",
//      "referral_code": null,
//      "referred_by": null,
//      "created_at": "2017-09-16T17:06:28+04:30",
//      "updated_at": "2017-09-18T16:07:02+04:30",
//      "deleted_at": null,
//      "jwt_token": **YOUR_TOKEN**,
//      "avatar": {
//            "url": "/uploads/user/99/avatar.jpg?var=1505744313"
//      },
//      "last_online": null,
//      "is_online": null,
//      "banks": []
//    }
//  }
//}