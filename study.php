<?php

require_once 'test1.php';

class User
{
    private $arr = [];

    public function __set($name, $value)
    {
        switch ($name){
            case 'arr':
                $this->arr[] = $value;
                break;
        }
    }
}

$user = new User();

$user->arr = 'dima';
$user->arr = [1,2,3,4];



echo "<pre>";
print_r($user);
echo "</pre>";
die();

