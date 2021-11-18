<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "my_searching";

    $conn =  new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die("Connection failed" . $conn->connect_error);
    }
    // echo "Connected successfully";
?>