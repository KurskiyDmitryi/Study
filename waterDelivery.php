<?php

class waterDelivery implements deliveryInterface
{
    public function delivery(place $place)
    {
        echo "Я везу по воде в  " . $place->getPlace() . "<br>";
    }
}