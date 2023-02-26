<?php

class waterDeliveryFactory implements deliveryFactoryInterface
{

    static function createDelivery(): deliveryInterface
    {
        return new waterDelivery();
    }
}