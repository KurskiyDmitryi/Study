<?php

namespace Admin;
class test1 extends \Users\test2
{


    public function __get($name)
    {
        if($name = 'name'){
            return ' name';
        }
    }
}

namespace Users;

class test2
{
    public function hello()
    {
        echo "heloo i am test2";
    }
}