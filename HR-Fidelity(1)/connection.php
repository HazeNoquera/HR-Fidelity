<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $databaseName = "hr-fidelity";
    
    $conn = mysqli_connect($servername, $username, $password, $databaseName,3306);

    if (mysqli_connect_errno()) {
        die("". mysqli_connect_error());
    }

?>