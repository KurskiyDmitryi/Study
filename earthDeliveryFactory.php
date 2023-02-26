<?php
require_once ('deliveryFactoryInterface.php');
class earthDeliveryFactory implements deliveryFactoryInterface
{

    static function createDelivery(): deliveryInterface
    {
        return new earthDelivery();
    }
}