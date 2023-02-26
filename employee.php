<?php
class employee
{
    public $surname;
    public $name;
    public $patronymic;
    private $age;

    public function getAge()
    {
        return $this->age;
    }

public function __call($name, $arguments)
{
    if($name == 'setAge'){
        $arguments[0] = intval($arguments[0]);
        if($arguments[0] > 18 && $arguments[0] < 60)
        {
            $this->age = $arguments[0];
        }
    }
}

public function list_structure($parametrs){
        if(is_array($parametrs) || is_object($parametrs)){
            foreach ($parametrs as $value) $this->list_structure($value);
        }else
            echo $parametrs;
}


    /**
     * @return mixed
     */
//    public function setAge($age)
//    {
//        if ($age > 18 && $age < 60) {
//            $this->age = $age;
//            return true;
//        }
//        return false;
//
//    }

    public function get_info()
    {
        return $this->surname . " " . $this->name . " " . $this->patronymic;
    }

    public function get_full_info()
    {
        return $this->get_info() . " (" . $this->age . ")";
    }
}