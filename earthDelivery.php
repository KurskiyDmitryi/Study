<?php
require_once ('place.php');
require_once ('deliveryInterface.php');
class earthDelivery implements deliveryInterface
{
public function delivery(place $place)
{
    echo "Я везу по земле в " . $place->getPlace() . "<br>";
}
}