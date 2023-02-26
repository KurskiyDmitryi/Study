<?php

interface MysqlInterface
{
   public function __construct($db_connect);
   public function query($query);
   public function get_query_info($query);
}