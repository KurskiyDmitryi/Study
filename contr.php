<?php
require_once('employee.php');
require_once('client.php');

class point
{
// Открытый интерфейс класса
    static function get_point($X, $Y)
    {
        $obj = new point();
        $obj->set_point($X, $Y);
        return $obj;
    }

    public function get_X()
    {
        return $this->X;
    }

    public function get_Y()
    {
        return $this->Y;
    }

// Закрытые члены и методы класса
    private $X;
    private $Y;

    private function set_point($X, $Y)
    {
        $this->X = $X;
        $this->Y = $Y;
    }
}

$arr = array(point::get_point(1,1),point::get_point(2,2),point::get_point(3,3));

echo "<pre>";
print_r($arr[0]->get_Y());
echo "</pre>";
die();



