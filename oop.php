<?php
require_once('dbconnect.php');
include_once('Query.php');


$query = new Query($conn);

$query->get_query_info('current_time');
$query->query('select sum(rating) from Customers');