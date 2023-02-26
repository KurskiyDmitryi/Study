<?php
require_once ('deliveryInterface.php');
interface deliveryFactoryInterface
{
static function createDelivery():deliveryInterface;
}