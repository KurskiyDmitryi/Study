<?php
use Totalizer\Totalizer3;

//require_once ('Totalizer3.php');
class Product
{
    public function __construct(public string $name, public int $price)
    {
    }
}


class Shop
{
    private array $callable;

    public function registerCallable(callable $callable)
    {
        $this->callable[] = $callable;
    }

    public function sell(Product $product)
    {
        echo $product->name . "<br>";
        foreach ($this->callable as $data) {
            call_user_func($data, $product);
        }
    }

}

$start = function ($product) {
    echo 'shoping started' . ' with ' . $product->name . "<br>";
};


class Mailer
{
    function mail(Product $product)
    {
        echo 'sending ' . $product->name . "<br>";
    }
}

class Totalizer
{
    public static function warnAmount(): callable
    {

        return function (Product $product) {
            if ($product->price > 5) {
                echo 'Price for ' . $product->name . ' is bigger than it possible' . "<br>";
            } else echo 'price is possible for  ' . $product->name . "<br>";
        };
    }

}

class Totalizer2
{
    public static function warnAmount($amt): callable
    {
        $count = 0;
        return function (Product $product) use ($amt, &$count) {
            $count += $product->price;
            echo 'summa : ' . $count . "<br>";
            if ($count > $amt) {
                echo "possible amount is reached <br>";
            }
        };
    }

}



$user = new Shop();
$totalizer = Totalizer\Totalizer3::class;
$user->registerCallable($start);
$user->registerCallable([new Mailer(), 'mail']);
$user->registerCallable($totalizer->warnAmount(11));
$user->sell(new Product('shoes', 6));
$user->sell(new Product('car', 4));
$user->sell(new Product('eggs', 3));

