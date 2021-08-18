<?php
    
    $cleardb_url = parse_url("mysql://b589f91f9e4b53:1689538f@us-cdbr-east-04.cleardb.com/heroku_5c53743cfadaed2?reconnect=true");
    $cleardb_server = "us-cdbr-east-04.cleardb.com";
    $cleardb_username = "b589f91f9e4b53";
    $cleardb_password = "1689538f";
    $cleardb_db = "heroku_5c53743cfadaed2";
    $active_group = 'default';
    $query_builder = TRUE;

    $conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>
<!-- mysql://b589f91f9e4b53:1689538f@us-cdbr-east-04.cleardb.com/heroku_5c53743cfadaed2?reconnect=true -->
