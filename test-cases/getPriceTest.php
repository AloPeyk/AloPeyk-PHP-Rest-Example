<?php

require_once '../vendor/autoload.php';

use AloPeyk\Exception\AloPeykApiException;
use AloPeyk\Model\Address;
use AloPeyk\Model\Order;

$apiResponse = null;
try {
    /*
     * Create Origin Address
     */
    $origin = new Address('origin', 'tehran', '35.723711', '51.410547');

    /*
     * Create First Destination
     */
    $firstDest = new Address('destination', 'tehran', '35.728457', '51.436969');

    /*
     * Create Second Destination
     */
    $secondDest = new Address('destination', 'tehran', '35.729379', '51.418151');

    /*
     * Create New Order
     */
    $order = new Order('motor_taxi', $origin, [$firstDest, $secondDest]);
    $order->setHasReturn(true);

    $apiResponse = $order->getPrice();

} catch (AloPeykApiException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}


if ($apiResponse && $apiResponse->status == "success") {
    $addresses = $apiResponse->object->addresses;

    $origin = $addresses[0];
    echo "ORIGIN: {$origin->city} ({$origin->lat} , {$origin->lng})";
    echo "<br/>";
    echo "Transport Type: " . $apiResponse->object->transport_type;
    echo "<hr/>";

    $destinations = array_shift($addresses);

    echo "<table border='1' cellspacing='0'>
            <thead>
                <tr style='background: #bddaf5'>
                    <th>#</th>
                    <th>City</th>
                    <th>Distance</th>
                    <th>Duration</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            ";
    foreach ($addresses as $destination) {
        echo "<tr>
                <td>{$destination->priority}</td>
                <td>{$destination->city}</td>
                <td>{$destination->distance}</td>
                <td>{$destination->duration}</td>
                <td>{$destination->price}</td>
              </tr>";
    }
    echo "<tr style='background: #7ab2a5; text-align: center'>
            <td colspan='2'>Total</td>
            <td>{$apiResponse->object->distance}(meters)</td>
            <td>{$apiResponse->object->duration}(seconds)</td>
            <td>{$apiResponse->object->price}(toman)</td>
          </tr>";
}

// SAMPLE API RESPONSE: ------------------------------------------------------------------------------------------------
//{
//  "status": "success",
//  "message": null,
//  "object": {
//    "addresses": [
//      {
//        "city": "tehran",
//        "type": "origin",
//        "lat": 35.75546,
//        "lng": 51.416874,
//        "priority": 0
//      },
//      {
//        "city": "tehran",
//        "type": "destination",
//        "lat": 35.758495,
//        "lng": 51.44255,
//        "priority": 1,
//        "distance": 2341,
//        "duration": 288,
//        "price": 3000
//      },
//      {
//        "city": "tehran",
//        "type": "destination",
//        "lat": 35.895452,
//        "lng": 51.589632,
//        "priority": 2,
//        "distance": 20192,
//        "duration": 2492,
//        "price": 16000
//      }
//    ],
//    "price": 31500,
//    "credit": false,
//    "distance": 22533,
//    "duration": 2780,
//    "status": "OK",
//    "user_credit": "0",
//    "delay": 0,
//    "city": "tehran",
//    "transport_type": "motor_taxi",
//    "has_return": false,
//    "cashed": false,
//    "price_with_return": 47250
//  }
//}