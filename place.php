<?php

class place
{
    private $place;

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function getPlace()
    {
        return $this->place;
    }
}