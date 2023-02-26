<?php

namespace oop\project\first;


use interfaces\NumberInterface;

require_once('interfaces/NumberInterface.php');

class first implements NumberInterface
{
    function sayNumber(string $number): void
    {
        echo "I am {$number}";
    }
}