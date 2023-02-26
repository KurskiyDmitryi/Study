<?php
$servername = "db";
$username = "root";
$password = "demo1234";
$db = 'study';
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";
