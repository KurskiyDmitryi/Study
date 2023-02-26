<?php
session_start();
if(isset($_SESSION['flash'])){
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
die();