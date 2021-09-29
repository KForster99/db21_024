<?php
    $servername = "localhost";
    $username = "db21_024";
    $password = "db21_024";
    $dbname = "db21_024";
    $conn = new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
        echo "Fail connected to database <br>";
    }
        
    if(!$conn->select_db($dbname)){
        die("Connection failed: ".$conn->connect_error);
        echo "Fail select to database <br>";
    }
        
    else{
        echo "Successfully connected to database <br>";
    }
