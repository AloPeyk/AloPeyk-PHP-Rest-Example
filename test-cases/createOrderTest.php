<?php

require_once '../vendor/autoload.php';
use AloPeyk\Exception\AloPeykApiException;
use AloPeyk\Model\Address;
use AloPeyk\Model\Order;

$apiResponse = null;
try {
    /*
     * Create Origin: Behjat Abad
     */
    $origin = new Address('origin', 'tehran', '35.755460', '51.416874');
    $origin->setAddress("... Behjat Abad, Tehran");
    $origin->setDescription("Behjat Abad");
    $origin->setUnit("44");
    $origin->setNumber("1");
    $origin->setPersonFullname("Leonardo DiCaprio");
    $origin->setPersonPhone("09370000000");

    /*
     * Create First Destination: N Sohrevardi Ave
     */
    $firstDest = new Address('destination', 'tehran', '35.758495', '51.442550');
    $firstDest->setAddress("... N Sohrevardi Ave, Tehran");
    $firstDest->setDescription("N Sohrevardi Ave");
    $firstDest->setUnit("55");
    $firstDest->setNumber("2");
    $firstDest->setPersonFullname("Eddie Redmayne");
    $firstDest->setPersonPhone("09380000000");

    /*
     * Create Second Destination: Ahmad Qasir Bokharest St
     */
    $secondDest = new Address('destination', 'tehran', '35.895452', '51.589632');
    $secondDest->setAddress("... Ahmad Qasir Bokharest St, Tehran");
    $secondDest->setDescription("Ahmad Qasir Bokharest St");
    $secondDest->setUnit("66");
    $secondDest->setNumber("3");
    $secondDest->setPersonFullname("Matt Damon");
    $secondDest->setPersonPhone("09390000000");

    $order = new Order('motor_taxi', $origin, [$firstDest, $secondDest]);
    $order->setHasReturn(true);

    $apiResponse = $order->create($order);

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
//    "city": "tehran",
//    "transport_type": "motor_taxi",
//    "customer_id": 99,
//    "status": "new",
//    "launched_at": "2017-09-19T12:26:08+04:30",
//    "delay": 0,
//    "price": 31500,
//    "credit": false,
//    "cashed": false,
//    "has_return": false,
//    "distance": 22533,
//    "duration": 2780,
//    "invoice_number": "LKH3LN",
//    "pay_at_dest": false,
//    "device_id": null,
//    "weight": 20,
//    "is_api": true,
//    "updated_at": "2017-09-19T12:26:08+04:30",
//    "created_at": "2017-09-19T12:26:08+04:30",
//    "id": 300,
//    "signature": null,
//    "order_token": "099c68a4a300ga2165445145a8eg992375433db",
//    "nprice": null,
//    "subsidy": null,
//    "signed_by": null,
//    "addresses": [
//      {
//        "id": 568522,
//        "order_id": 300,
//        "customer_id": 99,
//        "courier_id": null,
//        "lat": 35.75546,
//        "lng": 51.416874,
//        "type": "origin",
//        "priority": 0,
//        "city": "tehran",
//        "status": "pending",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": null,
//        "distance": null,
//        "google_distance": null,
//        "duration": null,
//        "google_duration": null,
//        "arrived_at": null,
//        "handled_at": null,
//        "created_at": "2017-09-19T12:26:08+04:30",
//        "updated_at": "2017-09-19T12:26:08+04:30",
//        "deleted_at": null,
//        "arrive_lat": null,
//        "arrive_lng": null,
//        "handle_lat": null,
//        "handle_lng": null,
//        "signature": null
//      },
//      {
//        "id": 568523,
//        "order_id": 300,
//        "customer_id": 99,
//        "courier_id": null,
//        "lat": 35.758495,
//        "lng": 51.44255,
//        "type": "destination",
//        "priority": 1,
//        "city": "tehran",
//        "status": "pending",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": null,
//        "distance": 2341,
//        "google_distance": null,
//        "duration": 288,
//        "google_duration": null,
//        "arrived_at": null,
//        "handled_at": null,
//        "created_at": "2017-09-19T12:26:08+04:30",
//        "updated_at": "2017-09-19T12:26:08+04:30",
//        "deleted_at": null,
//        "arrive_lat": null,
//        "arrive_lng": null,
//        "handle_lat": null,
//        "handle_lng": null,
//        "signature": null
//      },
//      {
//        "id": 568524,
//        "order_id": 300,
//        "customer_id": 99,
//        "courier_id": null,
//        "lat": 35.895452,
//        "lng": 51.589632,
//        "type": "destination",
//        "priority": 2,
//        "city": "tehran",
//        "status": "pending",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": null,
//        "distance": 20192,
//        "google_distance": null,
//        "duration": 2492,
//        "google_duration": null,
//        "arrived_at": null,
//        "handled_at": null,
//        "created_at": "2017-09-19T12:26:08+04:30",
//        "updated_at": "2017-09-19T12:26:08+04:30",
//        "deleted_at": null,
//        "arrive_lat": null,
//        "arrive_lng": null,
//        "handle_lat": null,
//        "handle_lng": null,
//        "signature": null
//      }
//    ]
//  }
//}