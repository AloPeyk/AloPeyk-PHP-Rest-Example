<?php

require_once '../vendor/autoload.php';

use AloPeyk\Model\Order;
use AloPeyk\Exception\AloPeykApiException;

$apiResponse = null;
try {
    // $orderID = "   309 ";
    // $orderID = "   309<p>";
    // $orderID = '';
    // $orderID = null;
    $orderID = 309;
    $apiResponse = Order::getDetails($orderID);
} catch (AloPeykApiException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($apiResponse);

// SAMPLE API RESPONSE: ------------------------------------------------------------------------------------------------
//
//"status": "success",
//  "message": null,
//  "object": {
//    "id": 309,
//    "invoice_number": "DT63AL",
//    "customer_id": 99,
//    "device_id": null,
//    "courier_id": 130,
//    "cancelled_by": null,
//    "status": "delivered",
//    "distance": 22533,
//    "duration": 2780,
//    "price": 31500,
//    "credit": false,
//    "cashed": false,
//    "has_return": false,
//    "pay_at_dest": false,
//    "delay": 0,
//    "transport_type": "motor_taxi",
//    "city": "tehran",
//    "is_api": true,
//    "weight": 20,
//    "accept_lat": 35.748778183994,
//    "accept_lng": 51.411911191127,
//    "rate": 0,
//    "comment": null,
//    "scheduled_at": null,
//    "launched_at": "2017-09-20T11:32:34+04:30",
//    "accepted_at": "2017-09-20T11:32:37+04:30",
//    "delivered_at": "2017-09-20T11:39:38+04:30",
//    "finished_at": null,
//    "stopped_at": null,
//    "removed_at": null,
//    "created_at": "2017-09-20T11:32:34+04:30",
//    "updated_at": "2017-09-20T11:39:38+04:30",
//    "deleted_at": null,
//    "picking_at": "2017-09-20T11:33:37+04:30",
//    "delivering_at": "2017-09-20T11:34:37+04:30",
//    "addresses": [
//      {
//          "lat": "35.75546",
//        "lng": "51.416874",
//        "type": "origin",
//        "priority": 0,
//        "arrived_at": "2017-09-20T11:33:37+04:30",
//        "handled_at": "2017-09-20T11:34:37+04:30",
//        "id": 568548,
//        "city": "tehran",
//        "order_id": "309",
//        "customer_id": "99",
//        "courier_id": "130",
//        "status": "handled",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": "",
//        "distance": "868",
//        "duration": "107",
//        "created_at": "2017-09-20T11:32:34+04:30",
//        "updated_at": "2017-09-20T11:34:37+04:30",
//        "deleted_at": "",
//        "arrive_lat": "35.750245509478695",
//        "arrive_lng": "51.397214392844006",
//        "handle_lat": "35.7501112063621",
//        "handle_lng": "51.41630904680925",
//        "signature": {
//          "url": "/uploads/order/309/address/568548/signature.jpg?var=1506000110"
//        }
//      },
//      {
//          "lat": "35.758495",
//        "lng": "51.44255",
//        "type": "destination",
//        "priority": 1,
//        "arrived_at": "2017-09-20T11:35:38+04:30",
//        "handled_at": "2017-09-20T11:36:38+04:30",
//        "id": 568549,
//        "city": "tehran",
//        "order_id": "309",
//        "customer_id": "99",
//        "courier_id": "130",
//        "status": "handled",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": "",
//        "distance": "2341",
//        "duration": "288",
//        "created_at": "2017-09-20T11:32:34+04:30",
//        "updated_at": "2017-09-20T11:36:38+04:30",
//        "deleted_at": "",
//        "arrive_lat": "35.7581975033594",
//        "arrive_lng": "51.41919184233538",
//        "handle_lat": "35.76113384396972",
//        "handle_lng": "51.414348540631",
//        "signature": {
//          "url": "/uploads/order/309/address/568549/signature.jpg?var=1506000110"
//        }
//      },
//      {
//          "lat": "35.895452",
//        "lng": "51.589632",
//        "type": "destination",
//        "priority": 2,
//        "arrived_at": "2017-09-20T11:37:38+04:30",
//        "handled_at": "2017-09-20T11:39:38+04:30",
//        "id": 568550,
//        "city": "tehran",
//        "order_id": "309",
//        "customer_id": "99",
//        "courier_id": "130",
//        "status": "handled",
//        "address": "address of order s origin",
//        "description": "some description for origin",
//        "unit": "unit of origin address",
//        "number": "number of origin address",
//        "person_fullname": "sender s name",
//        "person_phone": "sender s phone",
//        "signed_by": "",
//        "distance": "20192",
//        "duration": "2492",
//        "created_at": "2017-09-20T11:32:34+04:30",
//        "updated_at": "2017-09-20T11:39:38+04:30",
//        "deleted_at": "",
//        "arrive_lat": "35.76024827733142",
//        "arrive_lng": "51.3950500507545",
//        "handle_lat": "35.75058415169185",
//        "handle_lng": "51.40547057923416",
//        "signature": {
//          "url": "/uploads/order/309/address/568550/signature.jpg?var=1506000110"
//        }
//      }
//    ],
//    "screenshot": {
//        "url": "https://screenshots.alopeyk.com/?size=640x330&maptype=roadmap&language=fa&markers=icon:https://api.alopeyk.com/images/marker-origin.png%7C35.75546,51.416874&markers=icon:https://api.alopeyk.com/images/marker-destination.png%7C35.758495,51.44255&markers=icon:https://api.alopeyk.com/images/marker-destination.png%7C35.895452,51.589632"
//    },
//    "progress": "1.0000",
//    "courier": {
//        "id": 130,
//      "phone": "09499359023",
//      "firstname": "محمد رضا",
//      "lastname": "نورشی",
//      "email": "",
//      "avatar": {
//            "url": "/uploads/user/130/avatar.jpg?var=1506000110"
//      },
//      "last_online": null,
//      "is_online": null
//    },
//    "customer": {
//        "id": 99,
//      "phone": "09195071197",
//      "firstname": "mohammad hassan",
//      "lastname": "daneshvar",
//      "email": "daneshvar.email@gmail.com",
//      "avatar": {
//            "url": "/uploads/user/99/avatar.jpg?var=1506000110"
//      },
//      "last_online": null,
//      "is_online": null
//    },
//    "last_position_minimal": null,
//    "eta_minimal": {
//        "id": 46,
//      "last_position_id": 55,
//      "duration": 0,
//      "distance": 0,
//      "action": "handle",
//      "address_id": "568550",
//      "updated_at": "2017-09-20 11:36:39"
//    },
//    "signature": {
//        "url": "/uploads/order/309/address/568550/signature.jpg?var=1506000110"
//    },
//    "order_token": "69b9e3f08309g2b19e2458fa429g99734670660",
//    "nprice": null,
//    "subsidy": null,
//    "signed_by": ""
//  }
//}