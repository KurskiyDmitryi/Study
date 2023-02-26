<?php

namespace Totalizer;
use Closure;
use Product;

class Totalizer3
{
    private $count;
    private $amt;

    public function warnAmount($amt)
    {
        $this->amt = $amt;
        return Closure::fromCallable([$this, 'proccesPrice']);
    }

    private function proccesPrice(Product $product)
    {
        $this->count += $product->price;
        echo "This count is : " . $this->count . "<br>";
        if ($this->count > $this->amt) {
            echo 'you reache the maximum count : ' . $this->count . "<br>";
        }
    }
}