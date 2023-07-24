<?php
    $servername = "localhost";
    $databasename = "test1";
    $username = "test1";
    $password = "123456";

    $conn = new mysqli($servername,$username,$password,$databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>