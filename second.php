<?php

namespace oop\project\second;

use interfaces\NumberInterface;

require_once('interfaces/NumberInterface.php');


class Second implements NumberInterface
{

    function sayNumber(string $number): void
    {
        echo "i am number {$number}";
    }
}
