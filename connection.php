<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbName     = "phpdatabase";

$conn = new mysqli($servername, $username, $password, $dbName);
if(!$conn)
{
    die("connection failed : " .$conn->connect_error);
}
?>