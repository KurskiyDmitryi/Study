<?php
include_once('dbconnect.php');
include_once('MysqlInterface.php');
class Query implements MysqlInterface
{

    private $db_connect;


    public function __construct($db_connect)
    {
        $this->db_connect = $db_connect;
    }

    public function query($query)
    {

        if (mysqli_query($this->db_connect, $query)) {
            echo "Запрос выполнен успешно";
//        return mysqli_query($conn, $query);
        } else echo mysqli_error($this->db_connect);
    }

    public function get_query_info($query)
    {
        if (mysqli_query($this->db_connect, $query)) {
            echo "Запрос выполнен успешно";
            foreach (mysqli_query($this->db_connect, $query) as $key=>$value)
            {
                foreach ($value as $key=>$item)
                {
                    echo "<pre>";
                    print_r('<b>' .$key. '</b>' .' ' .$item);
                    echo "</pre>";

                }
            }
//        return mysqli_query($conn, $query);
        } else echo mysqli_error($this->db_connect);
    }

}

