<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "peak";
$dbconnect = mysqli_connect($hostname, $username, $password, $database);
if (!$dbconnect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
