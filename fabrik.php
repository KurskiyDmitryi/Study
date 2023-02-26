<?php
require_once('place.php');
require_once('earthDelivery.php');
require_once('waterDelivery.php');
require_once('deliveryHelper.php');

$orderData = [
    [
        'place' => new place('kiev'),
        'typeDelivery' => 'earth',
    ],
    [
        'place' => new place('kharkov'),
        'typeDelivery' => 'water',
    ]
];


$earthDelivery = new earthDelivery();
$waterDelivery = new waterDelivery();


foreach ($orderData as $data) {
    $place = $data['place'];
    $typeDelivery = $data['typeDelivery'];
    $delivery = deliveryHelper::getDeliveryType($typeDelivery)->createDelivery();
    $delivery->delivery($place);
}

