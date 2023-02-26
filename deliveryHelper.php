<?php
require_once ('earthDeliveryFactory.php');
require_once ('waterDeliveryFactory.php');
class deliveryHelper
{
static function getDeliveryType($paymentType){
    switch ($paymentType){
        case 'earth':
            return new earthDeliveryFactory();
        case 'water':
            return new waterDeliveryFactory();
    }
}
}