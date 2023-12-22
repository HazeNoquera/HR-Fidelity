<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_mis";

// Create Connection
$conn = new mysqli($servername, $username, $password, $database,3307);

// Check connection
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

?>