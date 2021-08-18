<?php
    
    $host ="us-cdbr-east-04.cleardb.com";
    $userName ="b589f91f9e4b53";
    $password = "1689538f";
    $dbName = "heroku_5c53743cfadaed2";

    $conn = new mysqli($host, $userName, $password, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>
