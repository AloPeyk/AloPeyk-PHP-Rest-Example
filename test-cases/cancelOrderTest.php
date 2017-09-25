<?php

require_once '../vendor/autoload.php';

use AloPeyk\Exception\AloPeykApiException;
use AloPeyk\Model\Order;

$apiResponse = null;
try {
    // $orderID = "   300 ";     // works fine as 300
    // $orderID = "   300<p>";   // works fine as 300
    // $orderID = '';            // throws AloPeykException
    // $orderID = null;          // throws AloPeykException
    $orderID = 300;
    $apiResponse = Order::cancel($orderID);
} catch (AloPeykApiException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($apiResponse);

// SAMPLE API RESPONSE: ------------------------------------------------------------------------------------------------
//{
//  "status": "success",
//  "message": null,
//  "object": {
//    "id": 300,
//    "status": "cancelled",
//    "courier_id": 121,
//    "customer_id": 99,
//    "signature": {
//        "url": "/uploads/order/300/signature.jpg?var=1505807816"
//    },
//    "order_token": null,
//    "nprice": null,
//    "subsidy": null,
//    "signed_by": ""
//  }
//}